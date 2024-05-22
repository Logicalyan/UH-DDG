

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

</head>

<style>
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .box {
        border: solid 1px;
  width: 140px;
  height: auto;
  float: left;
  transition: .5s linear;
  position: relative;
  display: block;
  overflow: hidden;
  padding: 15px;
  text-align: center;
  margin: 0 5px;
  background: transparent;
  text-transform: uppercase;
  font-weight: 900;
}

.box:before {
  position: absolute;
  content: '';
  left: 0;
  bottom: 0;
  height: 4px;
  width: 100%;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  box-sizing: border-box;
  transform: translateX(100%);
}

.box:after {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  width: 100%;
  height: 4px;
  border-top: 4px solid transparent;
  border-right: 4px solid transparent;
  box-sizing: border-box;
  transform: translateX(-100%);
}

.box:hover {
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

.box:hover:before {
  border-color: #262626;
  height: 100%;
  transform: translateX(0);
  transition: .3s transform linear, .3s height linear .3s;
}

.box:hover:after {
  border-color: #262626;
  height: 100%;
  transform: translateX(0);
  transition: .3s transform linear, .3s height linear .5s;
}

button {
  color: black;
  text-decoration: none;
  cursor: pointer;
  outline: none;
  border: none;
  background: transparent;
}
</style>
<body>
    <div class="container">
        <h1>Anda belum memiliki akun <br> Silahkan daftar Terlebih dahulu</h1>

            <a href="user_register.php">
            <button>
    <span class="box">
        Daftar
    </span>
</button>
            </a>
  
    </div>
    
</body>
</html>