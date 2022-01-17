
<html>
<head>
    <meta charset="utf-8">
    <title>multi user login system</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Username:<input type="text" name="user" placeholder="enter your username" </td>
            </tr>
            <tr>
                <td>password:<input type="text" name="pass" placeholder="enter your password" </td>
            </tr>
            <tr>
                <td>
                    select user type:<select name="usertype">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="login"></td>
            </tr>
        </table>
    </form>



</body>

</html>