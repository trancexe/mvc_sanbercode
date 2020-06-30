<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign up Form</h3>
    <form action="{{route('welcome')}}" method="POST">
        @csrf
        <label for="fName">First Name:</label><br><br>
        <input type="text" name="fName" id="fName"><br><br>
        <label for="lName">Last Name:</label><br><br>
        <input type="text" name="lName" id="lName"><br><br>

        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br><br>

        <label for="Nasionality">Nasionality</label><br><br>
        <select name="national" id="national">
            <option value="indonesia">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australia">Australia</option>
        </select>
        <br><br>
        <label for="lang">Language Spoken:</label><br><br>
        <input type="checkbox" name="indo" id="indo">
        <label for="">Bahasa Indonesia</label><br>
        <input type="checkbox" name="english" id="english">
        <label for="">English</label><br>
        <input type="checkbox" name="other" id="other">
        <label for="">Other</label><br>
        <br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>