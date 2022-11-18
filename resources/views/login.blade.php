<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Nyurat</title>
</head>
<style>
html {
    font-family: "Roboto", sans-serif;
    font-size: 10px;
    box-sizing: border-box;
    background-color: #ccc5be;
}

h1 {
    font-family: "Roboto", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 75px;
    margin-top: 50px;
    color: #ab6135;
}

.container {
    margin: 0 auto;
    width: 500px;
    background: #ffffff;
    border-radius: 31.37px;
    display: flex;
    flex-direction: column;
    align-items: end;
    padding: 32px;
}

form {
    width: 100%;
}

label {
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 23px;
}

input {
    width: 100%;
    height: 50px;
    background: #f3f1f1;
    border: #f3f1f1;
    border-radius: 13px;
    margin-bottom: 32px;
    margin-left: -5px;
    padding-left: 10px;
}

button {
    width: 117px;
    height: 47px;
    background: #ab6135;
    border: 1px solid #949aa4;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
    border-radius: 12px;
    font-family: "Roboto";
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    text-align: center;
    color: #ffffff;
}

.footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: -1;
}
</style>

<body>
    <center>
        <h1>LOGIN</h1>
    </center>
    <div class="box">
        <div class="container">
            <form action="{{url('proses_login')}}" method="POST">
                @csrf
                <label>NIM</label><br />
                <input type="text" id="nim" name="nim" required="required" /><br />
                <label>Password</label><br />
                <input type="password" id="password" name="password" required="required" /><br />
                <button type="submit">LOG IN</button>
            </form>
        </div>
    </div>
    <img class="footer" src="https://i.postimg.cc/85MmPkfw/undraw-moonlight-5-ksn-1-1.png" />
</body>

</html>