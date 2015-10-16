<?php
    class Mail {
        public function __construct(){
            $this->headers = "MIME-Version: 1.0" . "\r\n";
            $this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $this->headers .= 'From: info@corperlife.com' . "\r\n";;
        }

        public function registration_mail($first_name,$email){
            $this->subject = "Corper Life Registration";
            $this->message = "<p style='font-size:14px'>Hey ".$first_name."</p>
            <div style='margin-top:20px; font-size:14px;'>
            <p>
            The corperlife team is small group of already employed ex-corpers. We came together to help others get through the experience and start their careers. Here are the basic things you need to know about the corperlife<span style='font-size:11px'><sup>TM</sup></span> website.</p>
                
            <p>There are 2 main areas:-<br><br>
            <b><a href='http://www.corperlife.com/profile'>The Dashboard</a></b>: This section is exclusively for corpers. It is where you'll find all the resources you need to get through the NYSC service year. You will also be able to communicate with other corpers using the forums and find your saved CV's.</p>
            <p>
            <b><a href='http://www.corperlife.com/cvbuilder'>The Career Centre</a></b>: This section will help you prepare to get a job after NYSC. You can use our online CV maker to create, download and print epic CVs. We also provide other resources like tips and guides to help you get the job you want.</p>

            <p>
            The best part is, everything is is Free!<br>
            So don't carry last, use the corperlife<span style='font-size:11px'><sup>TM</sup></span> website and be great!</p>

            <p>Best wishes,<br>
            Team Corperlife</p></div>";


            $this->to = $email;
            return $this->message;
        }

        public function forgot_mail($first_name,$email,$password){
            $this->subject = "Corper Life Password Reset";
            $this->message = "<p style='font-size:14px'>Hey ".$first_name."</p>
            <div style='margin-top:20px; font-size:14px;'>
            <p>
            Your requested for password reset on corperlife<span style='font-size:11px'><sup>TM</sup></span> website.</p>
                
            <p>Following are your new login details:-<br><br>
                <b>Username</b>: ".$email."<br>
                <b>Password</b>: ".$password."<br>
            </p>
            
            Experience the corperlife<span style='font-size:11px'><sup>TM</sup></span> website and be great!</p>

            <p>Best wishes,<br>
            Team Corperlife</p></div>";

            $this->to = $email;
            return $this->message;
        }

        public function cv_mail($full_name,$code,$emails){
            $this->subject = "CV - ".$code." | CorperLife Career Center";
            $this->message = 'Hey '.$full_name.'
            <p style="margin-top:20px">
                Your CV with code <b>'.$code.'</b> is attached with this email. This code with be helpful for you to retrieve this CV. You can also find this CV in your CV list, if you have signed up with CorperLife™.
            </p>
            <p>Best wishes,<br>
            Team Corperlife</p>';
            
            return $this->message;
        }

        public function send_mail(){
            mail($this->to, $this->subject, $this->message, $this->headers);
        }

        public function ask_question($name,$email,$question){
            $this->message = ' Someone asked a question in knowledge bank section. Following are the details:
            <p style="margin-top:20px">
                <b>Name: </b>'.$name.'
            </p>
            <p style="margin-top:20px">
                <b>Email: </b>'.$email.'
            </p>
            <p style="margin-top:20px">
                <b>Question: </b>'.$question.'
            </p>';
            
            return $this->message;
        }

        public function faq_question($name,$email,$question){
            $this->message = ' Someone asked a question in faq section. Following are the details:
            <p style="margin-top:20px">
                <b>Name: </b>'.$name.'
            </p>
            <p style="margin-top:20px">
                <b>Email: </b>'.$email.'
            </p>
            <p style="margin-top:20px">
                <b>Question: </b>'.$question.'
            </p>';
            
            return $this->message;
        }
        public function advert($name,$email,$enquiry,$phone,$message){
            $enquiry_types = array("Select","General Enquiry","Advertising on Site","Technical Support","Partnership","Suggestions","Complaints");
            $this->message = ' Someone asked an enquiry in advertisement section. Following are the details:
            <p style="margin-top:20px">
                <b>Name: </b>'.$name.'
            </p>
            <p style="margin-top:20px">
                <b>Email: </b>'.$email.'
            </p>
            <p style="margin-top:20px">
                <b>Enquiry Type: </b>'.$enquiry_types[$enquiry].'
            </p>
            <p style="margin-top:20px">
                <b>Phone: </b>'.$phone.'
            </p>
            <p style="margin-top:20px">
                <b>Message: </b>'.$message.'
            </p>';
            
            return $this->message;
        }
    }
