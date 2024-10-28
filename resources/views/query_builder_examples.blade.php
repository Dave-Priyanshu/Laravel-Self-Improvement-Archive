<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <title>Laravel Query Builder Examples</title>
    <style>
        body {
            /* background: linear-gradient(to right, #ffffff, #e3f2fd); */
            /* background: linear-gradient(to right, #e3f2fd, #ffffff); */
            font-family: Lexend, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        h1, h2 {
            color: #2c3e50;
        }
        a {
            color: #3498db;
        }
        pre {
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            /* background: #f4f4f4; */
            padding: 10px;
            border-left: 4px solid #3498db;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Laravel Query Builder Examples</h1>
    <h2><a href="{{ route('entry') }}">Go Back to Portal page</a></h2>

    <h2>1. Retrieving Data</h2>

    <h3>a. Get All Records</h3>
    <pre>
$users = DB::table('users')->get();
    </pre>

    <h3>b. Get Specific Columns</h3>
    <pre>
$names = DB::table('users')->select('name', 'email')->get();
    </pre>

    <h3>c. Get Records with Conditions</h3>
    <pre>
$activeUsers = DB::table('users')->where('status', 'active')->get();
    </pre>

    <h3>d. Get Records with Multiple Conditions</h3>
    <pre>
$filteredUsers = DB::table('users')
    ->where('status', 'active')
    ->where('age', '>', 18)
    ->get();
    </pre>

    <h3>e. Get First Record</h3>
    <pre>
$firstUser = DB::table('users')->first();
    </pre>

    <h3>f. Get Count of Records</h3>
    <pre>
$userCount = DB::table('users')->count();
    </pre>

    <h2>2. Inserting Data</h2>

    <h3>a. Insert a Single Record</h3>
    <pre>
DB::table('users')->insert([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'created_at' => now(),
]);
    </pre>

    <h3>b. Insert Multiple Records</h3>
    <pre>
DB::table('users')->insert([
    ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'created_at' => now()],
    ['name' => 'Mike Johnson', 'email' => 'mike@example.com', 'created_at' => now()],
]);
    </pre>

    <h2>3. Updating Data</h2>

    <h3>a. Update a Single Record</h3>
    <pre>
DB::table('users')
    ->where('id', 1)
    ->update(['email' => 'newemail@example.com']);
    </pre>

    <h3>b. Update Multiple Records</h3>
    <pre>
DB::table('users')
    ->where('status', 'inactive')
    ->update(['status' => 'active']);
    </pre>

    <h2>4. Deleting Data</h2>

    <h3>a. Delete a Single Record</h3>
    <pre>
DB::table('users')->where('id', 1)->delete();
    </pre>

    <h3>b. Delete Multiple Records</h3>
    <pre>
DB::table('users')
    ->where('created_at', '<', now()->subYear())
    ->delete();
    </pre>

    <h2>5. Advanced Queries</h2>

    <h3><a href="{{ url('/query-builder-advanced-examples') }}" class="button">Go to Advanced Examples</a></h3>

    <h3>a. Order By</h3>
    <pre>
$sortedUsers = DB::table('users')->orderBy('created_at', 'desc')->get();
    </pre>

    <h3>b. Group By</h3>
    <pre>
$userCountByStatus = DB::table('users')
    ->select('status', DB::raw('count(*) as total'))
    ->groupBy('status')
    ->get();
    </pre>

    <h3>c. Joins</h3>
    <pre>
$usersWithRoles = DB::table('users')
    ->join('roles', 'users.role_id', '=', 'roles.id')
    ->select('users.name', 'roles.role_name')
    ->get();
    </pre>

    <h3>d. Using Raw Expressions</h3>
    <pre>
$users = DB::table('users')
    ->select(DB::raw('count(*) as user_count, status'))
    ->groupBy('status')
    ->get();
    </pre>

    <h3>e. Pagination</h3>
    <pre>
$users = DB::table('users')->paginate(10);
    </pre>

    <h3>f. Using Where Clauses with Arrays</h3>
    <pre>
$users = DB::table('users')
    ->where([
        ['status', '=', 'active'],
        ['age', '>', 18]
    ])
    ->get();
    </pre>

    <footer>
        <p>Documented by <strong>Priyanshu Dave</strong>. &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>
