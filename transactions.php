<!DOCTYPE html>
<html lang="en">

<?php

$phonetoken = $_COOKIE['token'];
if (!$phonetoken) {
    header("Location: login.php?not_logged_in");
    exit;
}
$phone = $phonetoken / '4578348';


try {

    include ("php/api.php");
    $user = getCustomer($phone);
    $transactions = getTransactions($user["id"]);
    //code...
} catch (\Throwable $th) {
    echo $th->getMessage();
}



?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/base.css?v=0.0.3">
    <link rel="stylesheet" href="css/style.css?v=0.0.3">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">

    <style>
        .log_out_transationHero {
            font-size: 12px;
            text-align: center;
            margin-top: 13px;
        }

        .sd-container {
            position: relative;
            float: left;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 25px;

        }

        .sd {
            padding: 5px 10px;
            height: 30px;
            width: 150px;
        }

        .open-button {
            position: absolute;
            width: 100%;
        }

        .open-button>svg {
            margin-left: 12px;
        }

        .open-button>span>svg {
            position: absolute;
            top: 3px;
            right: 10px;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            color: transparent;
            background: none;
            z-index: 1;
        }

        #myDate {
            width: 100%;
            padding: 20px 20px 20px 50px;
            border-radius: 5px;
            border: 1px solid #EDE0E0;
            background: #FFF;
            box-shadow: 0px 4px 1.3px -4px rgba(0, 0, 0, 0.25);
            outline: none;
        }

        #myDate:focus {
            border: 1px solid #5546AF;
        }

        .uer_balance_up_to_date {
            font-size: 20px;
            font-weight: 500;
            color: #6C6C6C;
            text-align: center;
        }

        .table_heading {
            font-size: 20px;
            font-weight: 600;
            margin-top: 35px;
            color: #434343;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        td,
        th {
            border-bottom: 1px solid #dddddd;
            color: #5D5D5D;
            ;
            text-align: left;
            padding: 8px;
        }


        tr td:nth-child(3),
        tr td:nth-child(2),
        tr th:nth-child(3),
        tr th:nth-child(2) {
            /* background-color: red; */
            text-align: right;
        }

        th:nth-child(2) {
            padding-right: 0px;
        }

        td:nth-child(2) {
            padding-left: 0px;
        }

        tr td:nth-child(3) {
            padding-left: 0px;
            width: 40%;
        }

        header {
            padding: 12px 0px;
        }

        .power_by_text {
            color: #FFF;
        }
    </style>
</head>

<body>
    <header class="pos-r">
        <div class="container noscroll">
            <div class="nav_logo pos-a">
                <span>iMeals</span>
            </div>

            <a href="#" class="whats_app_icon pos-a r-flex ali-c jut-c">
                <img src="img/whats-app-icon.svg" alt="Whats app icon">
            </a>
            <div class="hamburger" onclick="toggleMenu()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <nav class="menu">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact Us</a>
            </nav>

        </div>
        </div>
    </header>

    <main>
        <section class="hero_secion">
            <div class="container">
                <div class="delivery_name r-flex ali-c">
                    <div class="tool_kic_img">
                        <img src="img/tool-kitchen.svg" alt="nife icon">
                    </div>
                    <div class="name_deliry_text">Soumya Kitchen</div>
                </div>
                <div class="log_out_transationHero">Logged in as Rahul</div>
                <form>
                    <div class="sd-container r-flex ali-c ">
                        <label for="myDate" class="open-button">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.0208 3.16669H15.3056V4.22224H16.8889V15.8334H2.11111V4.22224H3.69444V3.16669H1.97917C1.85579 3.16875 1.73403 3.1951 1.62084 3.24422C1.50765 3.29335 1.40525 3.36429 1.31948 3.453C1.23371 3.54171 1.16626 3.64645 1.12097 3.76123C1.07569 3.87601 1.05346 3.99859 1.05556 4.12196V15.9336C1.05346 16.057 1.07569 16.1796 1.12097 16.2944C1.16626 16.4091 1.23371 16.5139 1.31948 16.6026C1.40525 16.6913 1.50765 16.7622 1.62084 16.8114C1.73403 16.8605 1.85579 16.8868 1.97917 16.8889H17.0208C17.1442 16.8868 17.266 16.8605 17.3792 16.8114C17.4923 16.7622 17.5948 16.6913 17.6805 16.6026C17.7663 16.5139 17.8337 16.4091 17.879 16.2944C17.9243 16.1796 17.9465 16.057 17.9444 15.9336V4.12196C17.9465 3.99859 17.9243 3.87601 17.879 3.76123C17.8337 3.64645 17.7663 3.54171 17.6805 3.453C17.5948 3.36429 17.4923 3.29335 17.3792 3.24422C17.266 3.1951 17.1442 3.16875 17.0208 3.16669Z"
                                    fill="#494949" />
                                <path d="M4.22217 7.38892H5.27772V8.44447H4.22217V7.38892Z" fill="#494949" />
                                <path d="M7.38892 7.38892H8.44447V8.44447H7.38892V7.38892Z" fill="#494949" />
                                <path d="M10.5555 7.38892H11.6111V8.44447H10.5555V7.38892Z" fill="#494949" />
                                <path d="M13.7222 7.38892H14.7777V8.44447H13.7222V7.38892Z" fill="#494949" />
                                <path d="M4.22217 10.0278H5.27772V11.0833H4.22217V10.0278Z" fill="#494949" />
                                <path d="M7.38892 10.0278H8.44447V11.0833H7.38892V10.0278Z" fill="#494949" />
                                <path d="M10.5555 10.0278H11.6111V11.0833H10.5555V10.0278Z" fill="#494949" />
                                <path d="M13.7222 10.0278H14.7777V11.0833H13.7222V10.0278Z" fill="#494949" />
                                <path d="M4.22217 12.6667H5.27772V13.7222H4.22217V12.6667Z" fill="#494949" />
                                <path d="M7.38892 12.6667H8.44447V13.7222H7.38892V12.6667Z" fill="#494949" />
                                <path d="M10.5555 12.6667H11.6111V13.7222H10.5555V12.6667Z" fill="#494949" />
                                <path d="M13.7222 12.6667H14.7777V13.7222H13.7222V12.6667Z" fill="#494949" />
                                <path
                                    d="M5.27778 5.27776C5.41775 5.27776 5.552 5.22216 5.65097 5.12318C5.74995 5.0242 5.80556 4.88996 5.80556 4.74999V1.58332C5.80556 1.44334 5.74995 1.3091 5.65097 1.21012C5.552 1.11115 5.41775 1.05554 5.27778 1.05554C5.1378 1.05554 5.00356 1.11115 4.90458 1.21012C4.80561 1.3091 4.75 1.44334 4.75 1.58332V4.74999C4.75 4.88996 4.80561 5.0242 4.90458 5.12318C5.00356 5.22216 5.1378 5.27776 5.27778 5.27776Z"
                                    fill="#494949" />
                                <path
                                    d="M13.7222 5.27776C13.8622 5.27776 13.9965 5.22216 14.0954 5.12318C14.1944 5.0242 14.25 4.88996 14.25 4.74999V1.58332C14.25 1.44334 14.1944 1.3091 14.0954 1.21012C13.9965 1.11115 13.8622 1.05554 13.7222 1.05554C13.5823 1.05554 13.448 1.11115 13.349 1.21012C13.2501 1.3091 13.1945 1.44334 13.1945 1.58332V4.74999C13.1945 4.88996 13.2501 5.0242 13.349 5.12318C13.448 5.22216 13.5823 5.27776 13.7222 5.27776Z"
                                    fill="#494949" />
                                <path d="M6.86108 3.16669H12.1389V4.22224H6.86108V3.16669Z" fill="#494949" />
                            </svg>
                            <span>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0689 5.15699L8.38395 9.76799C8.28173 9.86912 8.14374 9.92584 7.99995 9.92584C7.85616 9.92584 7.71817 9.86912 7.61595 9.76799L2.93095 5.15799C2.82809 5.05691 2.68965 5.00028 2.54545 5.00028C2.40124 5.00028 2.2628 5.05691 2.15995 5.15799C2.1093 5.20736 2.06905 5.26638 2.04156 5.33156C2.01408 5.39673 1.99992 5.46675 1.99992 5.53749C1.99992 5.60822 2.01408 5.67824 2.04156 5.74342C2.06905 5.80859 2.1093 5.86761 2.15995 5.91699L6.84395 10.527C7.15247 10.8299 7.56757 10.9996 7.99995 10.9996C8.43232 10.9996 8.84743 10.8299 9.15595 10.527L13.8399 5.91699C13.8907 5.8676 13.9311 5.80852 13.9587 5.74325C13.9863 5.67798 14.0005 5.60784 14.0005 5.53699C14.0005 5.46613 13.9863 5.396 13.9587 5.33073C13.9311 5.26546 13.8907 5.20638 13.8399 5.15699C13.7371 5.05591 13.5987 4.99928 13.4544 4.99928C13.3102 4.99928 13.1718 5.05591 13.0689 5.15699Z"
                                        fill="#242428" />
                                </svg>
                            </span>
                        </label>
                        <input class="sd" id="myDate" type="date" placeholder="myDate" name="selected_date" />
                    </div>
                </form>
                <div class="uer_balance_up_to_date">Spent: Rs. 500 | Added: Rs. 600</div>

                <div class="table_heading">Transaction </div>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Remark</th>
                            <th>Amount(in Rs)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transactions as $transaction) : ?>
                        <tr>
                            <td><?= $transaction["date"] ?></td>
                            <td><?= $transaction["type"] ?> </td>
                            <td><?= $transaction["amount"] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </section>



        <footer style="position: sticky; bottom: 0; width: 100%;">
            <a href="#" class="power_by_text r-flex ali-c jut-c">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21 11.1562H2.56348L10.6333 19.2261L9.71045 20.1489L0.0615234 10.5L9.71045 0.851074L10.6333 1.77393L2.56348 9.84375H21V11.1562Z"
                        fill="white" />
                </svg>
                &nbsp;
                &nbsp;
                <span>Go Back</span>
            </a>
        </footer>
    </main>



    <script src="js/script.js"></script>
</body>

</html>