<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Progno Login</title>
        
    </head>
    <body>
        <table width="95%" height="500" align="center" valign="top" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <div align="center" class="remarks"></div>
                    <table width="360" height="150" border="0" cellpadding="0" cellspacing="5" bgcolor="#FEECEC" align="center">

                        <tr>

                            <td align="center" valign="top" bgcolor="#FFFFFF"><table width="350" border="0" cellspacing="0" cellpadding="4">

                                    <tr>

                                        <td align="center" valign="middle" background="<?php echo base_url(); ?>img/menubg.jpg" >
										<strong class="contant2white" style="color:#FFFFFF">Admin Login</strong>
										</td>

                                    </tr>

                                    <tr>
                                        <td align="left" valign="top">
                                            <?php echo form_open('login'); ?>
                                            <br />
											<span style="color:red"><?php echo $error_message; ?></span>
                                            <table width="94%" border="0" align="center" cellpadding="3" cellspacing="0">
                                                <tr>
                                                    <td width="32%" valign="top" class="contant2">Username</td>

                                                    <td width="68%">
                                                        <input name="username" size="20" type="text" /><br />


                                                        <span class="remarks"><?php echo form_error('username'); ?></span>
                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td valign="top" class="contant2">Password</td>

                                                    <td><input name="password" size="20" type="password" />

                                                    <br /><span class="remarks"><?php echo form_error('password'); ?></span>													</td>

                                                </tr>

                                                <tr>

                                                    <td class="contant2">&nbsp;</td>

                                                    <td>

                                                        <label>

                                                            <input type="submit" name="login" value="Login">

                                                        </label>



                                                        <label>

                                                            <input type="reset" name="reset" id="reset" value="Reset" />

                                                        </label>                         </td>

                                                </tr>



                                          </table>

                                            <br />

                                            </form>

                                        </td>

                                    </tr>

                                </table>

                            </td>

                        </tr>

                    </table>	

                </td>
            </tr>
        </table>

    </body>
</html>