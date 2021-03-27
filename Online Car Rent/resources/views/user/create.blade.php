<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <style>
            footer
            {
                background: #eee;
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>

    <body>

        <table border="1" style="border-collapse: collapse;" width = "100%">

            <tr>

                <td align="center" style="border:0px" colspan='2'>  <h1>  Online Car Rent </h1> </td>

            </tr>
            

            <tr>

                <td colspan="2" align="center" style="padding: 100px">
                    
                    <form action='/register' method='POST'>

                        @csrf

                        <fieldset style="display: inline-block;">
                            
                            <legend><h3>REGISTER</h3></legend>


                            <table align="center"  width="800px">

                                
                    
                                <tr height="40px">
                    
                                    <td style="padding-left: 5px;"> <label for="name"> Name </td>
                                    <td style="padding-left: 5px;"> <input type="text" id="name" name="name" size="30" > </td>
                                    <td id="nameError" width = "200px" style="color: red;"></td>
                    
                                </tr>



                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>


                    
                                <tr height = "40px">
                    
                                    <td style="padding-left: 5px;"> <label for="email"> Email </label> </td>
                                    <td style="padding-left: 5px;"> <input type="text" id="email" name="email" size="30"> </td>
                                    <td id="emailError" width = "200px" style="color: red;"></td>
                                   
                                </tr>




                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>





                                <tr height = "40px">

                                    <td style="padding-left: 5px;"> <label for="password"> Password: </td>
                                    <td style="padding-left: 5px;"> <input type="password" id="password" name="password" size="30" > </td>
                                    <td id="passwordError" width = "200px" style="color: red;"> </td>

                                </tr>


                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>




                                <tr height = "40px">

                                    <td style="padding-left: 5px;"> <label for="confirmPassword"> Confirm Password </td>
                                    <td style="padding-left: 5px;"> <input type="password" id="confirmPassword" name="confirmPassword" size="30"> </td>
                                    <td id="confirmPasswordError" width = "200px" style="color: red;"> </td>

                                </tr>


                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>




                                <tr height="40px">
                    
                                    <td style="padding-left: 5px;"> <label for="phone"> Phone No. </td>
                                    <td style="padding-left: 5px;"> <input type="text" id="phone" name="phone" size="30"> </td>
                                    <td id="phoneError" width = "200px" style="color: red;"> </td>
                                    
                                </tr>



                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>
                    
                                <tr height = 40px>
                    
                                    <td style="padding-left: 5px;" colspan="2">
                                        
                                        <fieldset>

                                            <legend>User Type</legend>
                                            <input type="radio" name="user_type" value="admin" id="user_type1">
                                            <label for="user_type1"> Admin </label>
                                            <input type="radio" name="user_type" value="member" id="user_type2">
                                            <label for="user_type2"> Member </label>

                                        </fieldset>

                                    </td>

                                    <td id="user_typeError" width = "200px" style="color: red;"></td>
                    
                                    
                                </tr>

                                
                    


                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>


                    
                    
                                <tr>
                    
                                    <td align="center" colspan="3" align="left">
                                        <input type="submit" name="register" value="Register">
                                       
                                    </td>
                    
                                </tr>
                            
                    
                            </table>

                        </fieldset>


                    </form>
            
                </td>

            </tr>

            <tr height="50px">
                <td align="center" colspan="2"> <footer> Copyright@2020 </footer> </td>
            </tr>

        </table>

    </body>

</html>