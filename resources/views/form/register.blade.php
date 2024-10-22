<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        
        border: 2px solid skyblue;
        color: orange;
        padding-left:10px;
        font-size: 15px;
        font-weight:bold;
    }
    .input_wrapper{
        margin-top: 10px;
    }
</style>
<body>
    <h1>Register Form</h1>
    <form action="add-user" method="post">
        @csrf
        <div class="input_wrapper">
            <input type="text" placeholder="Enter User Name" name="userName">
        </div>
        <div class="input_wrapper">
            <input type="email" placeholder="Enter User Email" name="userEmail">
        </div>
        <div class="input_wrapper">
            <input type="text" placeholder="Enter User City" name="userCity">
        </div>
        <div class="input_wrapper">
            <input type="password" placeholder="Enter User Password" name="userPassword">
        </div>
        <div>
    <h1>User Skills</h1>
    <input type="checkbox" name="skill[]" value="PHP" id="php">
    <label for="php">PHP</label>
    <br/>
    <input type="checkbox" name="skill[]" value="Node" id="node">
    <label for="node">Node.js</label>
    <br/>
    <input type="checkbox" name="skill[]" value="React" id="react">
    <label for="react">React.js</label>
    <br/>
</div>

        <div>
            <input type="range" name="age" min="18" max="100" id="">
        </div>

        <div>
            <h1>City</h1>
            <select name="city" >
                <option value="lahore">Lahore</option>
                <option value="faisalabad">Faisalabad</option>
                <option value="multan">Multan</option>
            </select>
        </div>
        <div class="input_wrapper">
            <button>Submit</button>
        </div>
        
    </form>
</body>
</html>