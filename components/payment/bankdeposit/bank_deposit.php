<html lang="en">
<head>
    <title>Manual Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bank_deposit.css">
</head>
<body>
    <div class="container">
            <div class="side_nav">
                <img src="../../../assets/icons/logo.png">
            </div>
            <div class="main_container">
                <div class="form_container">
                    <div class="title_container">
                            <h2> Payment Details </h2>
                            <hr>
                    </div>
                    <form action="" method="post">
                        <div class="input_container">
                            <label>Bank Name</label>
                            <input type="text" name="bankname"/>
                        </div>
                        <div class="input_container">
                            <label>Branch</label>
                            <input type="text" name="branch"/>
                        </div>
                        <div class="input_container">
                            <label>Account Holder's Name</label>
                            <input type="text" name="accountholdersname"/>
                        </div>
                        <div class="input_container">
                            <label>Amount</label>
                            <input type="text" name="amount" id="">
                        </div>
                        <div class="input_container">
                            <label>Upload Slip</label>
                            <input type="file" name="bankslip"/>
                        </div>
                        <div class="button_container">
                            <button type="submit" name="back">Back</button>
                            <button type="submit" name="upload">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>