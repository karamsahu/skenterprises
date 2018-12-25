<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SK Enterprises</title>
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>
    <script type="text/javascript" src="calendar.js"></script>
</head>

<body id="main_body">

    <img id="top" src="top.png" alt="">
    <div id="form_container">
        <h1><a>SK Enterprises</a></h1>
        <form id="form_42052" class="appnitro" method="post" action="./sk-submit.php">
            <div class="form_description">
                <h2>SK Enterprises</h2>
                <p>Campaign for laptop desktop free health checkup</p>
            </div>
            <ul>

                <li id="li_9">
                    <label class="description" for="element_9">Name </label>
                    <div>
                        <input id="element_9" name="name" class="element text medium" type="text" maxlength="255" value="" />
                    </div>
                </li>
                <li id="li_2">
                    <label class="description" for="element_2">Phone </label>
                    <div>
                        <input id="element_2" name="phone" class="element text medium" type="text" maxlength="255" value="" />
                    </div>
                </li>
                <li id="li_7">
                    <label class="description" for="element_7">Device </label>
                    <div>
                        <select class="element select medium" id="device" name="device">
                            <option value="" selected="selected">--Select--</option>
                            <option value="laptop">Laptop</option>
                            <option value="desktop">Dekstop</option>
                            <option value="macbook">Macbook</option>

                        </select>
                    </div>
                </li>
                <li id="li_8">
                    <label class="description" for="element_7">Interested </label>
                    <div>
                        <select class="element select medium" id="interested" name="interested">
                            <option value="" selected="selected">--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            <option value="maybe">May be</option>

                        </select>
                    </div>
                </li>
                <li id="li_6">
                    <label class="description" for="element_6">Appointment Date </label>
                    <span>
                        <input id="element_6_1" name="appointment_date_mm" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_6_1">MM</label>
                    </span>
                    <span>
                        <input id="element_6_2" name="appointment_date_dd" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_6_2">DD</label>
                    </span>
                    <span>
                        <input id="element_6_3" name="appointment_date_yyyy" class="element text" size="4" maxlength="4" value="" type="text">
                        <label for="element_6_3">YYYY</label>
                    </span>

                    <span id="calendar_6">
                        <img id="cal_img_6" class="datepicker" src="calendar.gif" alt="Pick a date.">
                    </span>
                    <script type="text/javascript">
                        Calendar.setup({
                            inputField: "element_6_3",
                            baseField: "element_6",
                            displayArea: "calendar_6",
                            button: "cal_img_6",
                            ifFormat: "%B %e, %Y",
                            onSelect: selectDate
                        });

                    </script>

                </li>
                <li id="li_4">
                    <label class="description" for="element_4">Appointment Time </label>
                    <span>
                        <input id="element_4_1" name="appointment_time_hh" class="element text " size="2" type="text" maxlength="2" value="" /> :
                        <label>HH</label>
                    </span>
                    <span>
                        <input id="element_4_2" name="appointment_time_mm" class="element text " size="2" type="text" maxlength="2" value="" /> :
                        <label>MM</label>
                    </span>
                    <span>
                        <select class="element select" style="width:4em" id="element_4_4" name="appointment_time_ampm">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                        <label>AM/PM</label>
                    </span>
                </li>
                
                <li id="li_8">
                    <label class="description" for="element_7">Details Shared</label>
                    <div>
                        <select class="element select medium" id="sharing-details" name="sharing-details">
                            <option value="" selected="selected">--Select--</option>
                            <option value="whatsapp">WhatsApp</option>
                            <option value="sms">SMS</option>
                            <option value="notshared">Not Shared</option>
                        </select>
                    </div>
                </li>
                
                <li id="li_10">
                    <label class="description" for="remarks">Remarks </label>
                    <div>
                        <textarea id="element_10" name="remarks" class="element textarea medium"></textarea>
                    </div>
                </li>

                <li class="buttons">
                    <input type="hidden" name="form_id" value="42052" />

                    <input id="saveForm" class="button_text" type="submit" name="add" value="Submit" />
                </li>
            </ul>
        </form>
        <div id="footer">
            Maintained by <a href="http://www.capofila.in">Capofila Tech</a>
        </div>
    </div>
    <img id="bottom" src="bottom.png" alt="">

</body>

</html>
