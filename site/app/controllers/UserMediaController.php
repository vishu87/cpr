<?php

class UserMediaController extends BaseController {

    public function uploadProfilePic(){
        include(app_path().'/crop-avatar.php');
        $user = User::find(Auth::id());
        $user->profile_pic = $crop -> getResult();
        $user->save();
        echo json_encode($response);
    }

     public function uploadCvPic($code){
        include(app_path().'/crop-avatar-passport.php');
        $cv = Cv::where('cv_code', $code)->first();
        $cv->profile_image = $crop -> getResult();
        $cv->save();
        echo json_encode($response);
    }
}
    