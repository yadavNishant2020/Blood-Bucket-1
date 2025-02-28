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

/* Home */
.home-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.home-box {
    padding: 20px 20px;
    flex: 0 1 150px;
}



.top-home {
    font-weight: bold;
    font-size: large;
    text-align: center;
    color: red;
    position: absolute;
    top: 6rem;
    width: 100%;
}

.left-home {
    width: fit-content;
    background-color: rgba(245, 222, 179, 0.5);
    border-radius: 12px;
    margin: 190px auto 120px auto;
}

.left-home h1 {
    font-size: 6rem;
}

.right-home {
    width: fit-content;
    display: grid;
    align-items: center;
    text-align: center;
    background: rgba(0, 0, 0, 0.3);
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.25);
    padding: 10% 5%;
    border-radius: 20px;
    margin: 160px auto 80px auto;
}

#searchCity {
    font-weight: 500;
    background-color: #fff;
    text-align: center;
    width: 250px;
    border-radius: 50px;
    padding: 8px 10px;
    border: 2px solid blue;
    font-size: 1.5rem;
}

#bg-select {
    width: 150px;
    border: 2px solid blue;
    font-size: 1rem;
}

#search-btn {
    text-align: center;
    font-size: 1.5rem;
    padding: 6px 12px;
    border: none;
    border-radius: 8px;
    background-color: #0b62d3;
    color: #ffffff;
    cursor: pointer;
    font-weight: bold;
}

/* Search Result */
#search-result {
    /* display: none; */
}

.col-form-label p {
    font-size: 1.5rem;
    color: rgb(0, 0, 0);
    font-weight: bold;
}

.notAvl {
    color: red;
    font-weight: bold;
    margin: 2rem 0 2rem 0;
    font-size: 2rem;
    text-align: center;
}

.head-container h3 {
    text-align: center;
    padding: 3rem 0 0rem 0;
    font-size: 2.8rem;
    text-decoration-line: underline;
    text-decoration-color: #e43011;
}

.head-container p {
    text-align: center;
    font-size: 1.3rem;
    font-weight: bold;
    color: royalblue;
    text-decoration-line: underline;
    text-decoration-color: royalblue;
}

.table table {
    text-align: center;
    border-collapse: collapse;
    border-radius: 1rem;
}

.table tr th,
.table tr td {
    font-size: 1.5rem;
    padding: 4px 8px;
}

.table table thead {
    border-radius: 8px;
    color: #fff;
    background-color: rgb(179, 77, 5);
}

.table table tbody {
    border-radius: 8px;
    background-color: rgba(255, 190, 49, 0.616);
}

/* Benefits */
#benefits {
    display: grid;
    padding: 25px;
}

.head-container h2 {
    text-align: center;
    padding: 3rem 0 3rem 0;
    font-size: 4rem;
    text-decoration-line: underline;
    text-decoration-color: #e43011;
}

.body-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 2rem;
    padding-bottom: 4rem;
}

#benefits .body-container {
    padding-bottom: 9rem;
}

#benefits .body-container .box {
    background-color: rgba(255, 235, 205, 0.75);
    padding: 20px 20px;
    text-align: center;
    border-radius: 6px;
    transition: all 0.5s ease;
    border: 1px solid rgb(206, 206, 206);
    flex: 1 1 150px;
    margin: 20px;
}

#benefits .body-container .box:hover {
    box-shadow: 0 0 20px black;
}

#benefits .body-container .box .box-head {
    margin-bottom: 20px;
    padding: 8px 12px;
    border-radius: 4px;
    background: linear-gradient(15deg, tomato, orange);
}

/* Availability */
#availability {
    display: grid;
    padding: 20px;
}

.body-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

#availability .body-container .box {
    padding: 20px 20px;
    text-align: center;
    border-radius: 6px;
    transition: all 0.5s ease;
    background-color: rgba(255, 235, 205, 0.75);
    /* background-color: rgba(245, 222, 179, 0.5); */
    border: 1px solid rgb(206, 206, 206);
    flex: 1 1 150px;
    margin: 20px;
}

#availability .body-container .box:hover {
    box-shadow: 0 0 20px black;
}

.box .bg-img img {
    max-width: 12rem;
    height: auto;
}

.box .qty span {
    font-size: 4rem;
}

/* Team */
#team .body-container {
    padding: 0rem 6rem 0rem 6rem;
    /* max-width: fit-content; */
    justify-content: space-evenly;
}

#team .body-container .box {
    padding: 20px 20px;
    text-align: center;
    border-radius: 6px;
    transition: all 0.5s ease;
    background-color: rgba(255, 235, 205, 0.75);
    /* background-color: rgba(245, 222, 179, 0.5); */
    border: 1px solid rgb(206, 206, 206);
    flex: 1 1 150px;
    margin: 20px;
    max-width: fit-content;
}

@media only screen and (max-width: 780px) {
    header ul li {
        display: none;
    }
}

#team .body-container .box .pic {
    width: fit-content;
}

#team .body-container .box .pic img {
    max-width: 20rem;
    border-radius: 50%;
    background: radial-gradient(rgb(255, 230, 162), rgb(214, 114, 0));
}

#team .body-container .box .info {
    padding: 20px 10px 10px 10px;
}

#team .body-container .box .info .tname {
    font-size: 1.5rem;
    font-weight: bold;
}

#team .body-container .box .info .role {
    font-size: 1.4rem;
    font-weight: 300;
}

/* Footer */
.foot {
    margin-top: 3rem;
    text-align: center;
    width: 100%;
    padding: 1rem 0rem 1rem 0rem;
    font-size: 1rem;
    color: white;
    background-color: rgba(238, 123, 100, 0.8);
}

.foot a {
    text-decoration: none;
    color: #fff;
}

.foot a:hover {
    letter-spacing: 1px;
    color: #0b62d3;
}

@media only screen and (max-width : 480px) {}
</style>