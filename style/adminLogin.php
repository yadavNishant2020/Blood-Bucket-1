<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

* {
    font-family: 'Open Sans', sans-serif;
    box-sizing: border-box;
    margin: 0px;
    padding: 0px;
    scroll-behavior: smooth;
}

body {
    display: grid;
    grid-template-rows: auto 1fr auto;
    transition: all 0.5s ease-out;
    scroll-behavior: smooth;
}

/* Header - Navbar */
.navbar {
    position: fixed;
    width: 100%;
    padding: 0.8rem 2rem 0.8rem 1.6rem;
    font-size: 1.25rem;
    color: white;
    background-color: rgba(238, 123, 100, 0.8);
}

.logo {
    font-size: 1.8rem;
    transition: all 0.5s ease;
    font-weight: bold;
    float: left;
    cursor: pointer;
}

.logo:hover {
    letter-spacing: 2px;
}

header ul {
    position: absolute;
    top: 50%;
    right: 2rem;
    transform: translateY(-50%);
    list-style-type: none;
    display: flex;
    float: right;
    margin-right: 9rem;
}

li a,
li .dropbtn {
    transition: all 0.5s ease;
    text-decoration: none;
    color: white;
}

li a:hover {
    letter-spacing: 2px;
}

ul li {
    border-radius: 10px;
    margin: 10px;
}

#main-login-Btn {
    cursor: pointer;
    margin: 5px 20px 0px 15px;
    padding: 5px 15px 5px 15px;
    border: none;
    border-radius: 50px;
    transition: all 0.5s ease;
    font-size: 1.2rem;
    font-weight: bold;
    background: linear-gradient(30deg, rgb(187, 22, 22), rgb(212, 119, 12));
    color: white;
    float: right;
}

#main-login-Btn:hover {
    letter-spacing: 2px;
    box-shadow: 4px 4px 10px 0px rgba(0, 0, 0, 0.411);
}

form {
    position: relative;
    top: 30vh;
    margin: auto;
    padding: 30px 60px;
    border-radius: 1.6rem;
    background: linear-gradient(20deg, tomato, orange);
}

.top-heading {
    text-align: center;
    font-size: 1.6rem;
    font-weight: 900;
}

form input[type="text"],
form input[type="password"] {
    width: 100%;
    font-weight: bold;
    font-size: 1.3rem;
    margin: 10px;
    padding: 6px;
    border-radius: 8px;
    border: none;
}

#adminBtn {
    margin: 8px;
    margin-top: 12px;
    float: right;
    color: white;
    font-size: 1.3rem;
    font-weight: bold;
    padding: 2px 8px;
    border-radius: 8px;
    border: none;
    background: linear-gradient(20deg, rgb(7, 73, 255), rgb(2, 225, 255));
}

#adminBtn:hover {
    background: linear-gradient(200deg, rgb(7, 73, 255), rgb(2, 225, 255));
}

.foot {
    position: fixed;
    bottom: 0;
}
</style>