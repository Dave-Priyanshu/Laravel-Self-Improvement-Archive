<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Query Builder Advanced Examples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        h1, h2 {
            color: #2c3e50;
        }
        pre {
            background: #f4f4f4;
            padding: 10px;
            border-left: 4px solid #3498db;
        }
        a {
            color: #3498db;
        }
    </style>
</head>
<body>
    <h1>Laravel Query Builder Advanced Examples</h1>

    <h2><a href="{{ route('queryBuilderExample') }}">Go Back to Basic Examples</a></h2>

    <h2>1. Conditional Updates with `DB::raw()`</h2>
    <pre>
DB::table('users')
    ->where('status', 'active')
    ->update(['points' => DB::raw('points + 10')]);
    </pre>
    <p>This updates the points for active users by adding 10 to their current value.</p>

    <h2>2. Subqueries</h2>

    <h3>a. Using a Subquery in the Select Clause</h3>
    <pre>
$users = DB::table('users')
    ->select('users.*', DB::raw('(SELECT COUNT(*) FROM posts WHERE posts.user_id = users.id) as post_count'))
    ->get();
    </pre>
    <p>This retrieves users along with the count of their posts.</p>

    <h3>b. Subquery in `WHERE` Clause</h3>
    <pre>
$users = DB::table('users')
    ->where('id', function($query) {
        $query->select('user_id')
              ->from('user_profiles')
              ->where('bio', 'like', '%developer%');
    })
    ->get();
    </pre>
    <p>This retrieves users with a profile bio containing "developer."</p>

    <h2>3. Grouping and Aggregations</h2>

    <h3>a. Group By with Multiple Columns</h3>
    <pre>
$stats = DB::table('orders')
    ->select(DB::raw('COUNT(*) as order_count, SUM(total) as total_sales, status'))
    ->groupBy('status', 'payment_method')
    ->get();
    </pre>
    <p>This groups orders by status and payment method, counting the total orders and sales.</p>

    <h3>b. Having Clause</h3>
    <pre>
$popularProducts = DB::table('products')
    ->select('name', DB::raw('COUNT(*) as purchase_count'))
    ->join('order_items', 'products.id', '=', 'order_items.product_id')
    ->groupBy('name')
    ->having('purchase_count', '>', 10)
    ->get();
    </pre>
    <p>This retrieves products purchased more than 10 times.</p>

    <h2>4. Joining Multiple Tables</h2>
    <pre>
$data = DB::table('users')
    ->join('posts', 'users.id', '=', 'posts.user_id')
    ->join('comments', 'posts.id', '=', 'comments.post_id')
    ->select('users.name as user_name', 'posts.title as post_title', 'comments.body as comment_body')
    ->get();
    </pre>
    <p>This retrieves user names, post titles, and comment bodies.</p>

    <h2>5. Pagination with Complex Queries</h2>
    <pre>
$paginatedUsers = DB::table('users')
    ->where('status', 'active')
    ->orderBy('created_at', 'desc')
    ->paginate(5);
    </pre>
    <p>This retrieves active users, ordered by creation date, with pagination.</p>

    <h2>6. Using Raw SQL Expressions</h2>
    <pre>
$users = DB::table('users')
    ->select('name', DB::raw('IF(status = "active", "Active", "Inactive") as user_status'))
    ->get();
    </pre>
    <p>This returns user names with a custom status based on their activity.</p>

    <h2>7. Dynamic Conditions</h2>
    <pre>
$query = DB::table('users');

if ($request->has('status')) {
    $query->where('status', $request->input('status'));
}

if ($request->has('age')) {
    $query->where('age', '>=', $request->input('age'));
}

$filteredUsers = $query->get();
    </pre>
    <p>This dynamically builds a query based on request parameters.</p>

    <h2>8. Chunking Results</h2>
    <pre>
DB::table('users')->orderBy('id')->chunk(100, function ($users) {
    foreach ($users as $user) {
        // Process each user...
    }
});
    </pre>
    <p>This processes users in chunks of 100 to manage memory usage.</p>

    <h2>9. Union Queries</h2>
    <pre>
$users = DB::table('admins')->select('name', 'email')
    ->union(DB::table('users')->select('name', 'email'))
    ->get();
    </pre>
    <p>This combines results from admins and users into a single collection.</p>

    <h2>10. Using JSON Columns</h2>
    <pre>
$users = DB::table('users')
    ->where('preferences->newsletter', true)
    ->get();
    </pre>
    <p>This retrieves users with newsletter preferences set to true.</p>

    <footer>
        <p>Documented by <strong>Priyanshu Dave</strong>. &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>
