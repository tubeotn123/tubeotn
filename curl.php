﻿?php
/code tubeotn
//fb : https://www.facebook.com/tubeo2709
<?php
set_time_limit(0);
error_reporting(0);

        class tubeotn
{
        public $token;{"session_key":"5.rNMx_H7aTcOF4w.1495400577.22-100008415341109","uid":100008415341109,"secret":"e125d1981b8674bf9bd8e23d75a66632","access_token":"EAAAAAYsX7TsBAHDUWZAOFlO7AJslQwr6aol2ZBWh0xwo8rbXDWTkRgT6S4AfpQZBKFD0ZBdcauMyEWOiFaoMVm6hMq8OCCleNAd0O4Ovo1gpZCNphI5aF5q1m9n14uZB8gyG3uqFYArzzPCROAJtM9MBwP7ZAaIqvDM6k7Cwq1hg0ZB9WMN1n3kW68S5UIuEhlbzEZC0SF0ZC8awZDZD","machine_id":"gQAiWcX-8iFaQbCIuhQ1szO-","confirmed":true,"identifier":"tubeo2709"}
        public $id;100008415341109
        private function Submit($url,$fields){
$random_IP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
$userAgents=array( 
"Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
"Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
"Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ru-ru) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ko-kr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; HTC-P715a; en-ca) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/534.1+ (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-au) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.36 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3"
);
$random = rand(0,count($userAgents)-1);
                $field_string = http_build_query($fields);
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL,$url);
                curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
curl_setopt($ch,CURLOPT_FRESH_CONNECT,true); 
curl_setopt($ch,CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $random_IP", "HTTP_X_FORWARDED_FOR: $random_IP"));
curl_setopt($ch,CURLOPT_TCP_NODELAY,true);
curl_setopt($ch,CURLOPT_REFERER,$url);               
                curl_setopt($ch,CURLOPT_TIMEOUT,5);            
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERAGENT, $userAgents[$random]);
                curl_setopt($ch,CURLOPT_COOKIEFILE,'logvip.txt');
                curl_setopt($ch,CURLOPT_COOKIEJAR,'logvip.txt');
                curl_setopt($ch, CURLOPT_POST, count($field_string));
                curl_setopt($ch,CURLOPT_POSTFIELDS,$field_string);  
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $body = curl_exec($ch);
                if(!curl_errno($ch)){
                $info = curl_getinfo($ch);
                $redir = $info['redirect_url'];
                $code = $info['http_code'];
                curl_close($ch);
                return $body." <br>Mã Phản Hồi = ".$code."";
                }
                unlink("log.txt");
                curl_close($ch);
                }
private function show($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'kubondeptrai');
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "log.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}

private function kubon1()
{
$login = "http://autolike.vn/login.php";
$data =  array('access_token_type'=>1,'access_token'=>$this->token,);
$this->Submit($login,$data);
$log = 'http://autolike.vn/likes.php';
$cap  = $this->Submit($log,null);
$post = 'http://autolike.vn/lenlike.php';
$data = array("fb_id" => $this->id,);
echo $this->Submit($post,$data);

        
}
private function kubon2()
{
$login = "https://vipfb.net/login.php";
$data =  array('access_token_type'=>1,'access_token'=>$this->token,);
$this->Submit($login,$data);
$log = 'https://vipfb.net/likes.php';
$cap  = $this->Submit($log,null);
$post = 'https://vipfb.net/lenlike.php';
$data = array("fb_id" => $this->id,);
echo $this->Submit($post,$data);

        
}
private function kubon3()
{
$login = "http://haylike.net/login.php?users=".$this->token;
$this->Submit($login,null);
$log = 'http://haylike.net/index.php';
$cap  = $this->Submit($log,null);
                               $log1 = 'http://haylike.net/rkzganteng.php?type=status';
$cap1  = $this->Submit($log1,null);
$post = 'http://haylike.net/rkzganteng.php?type=status';
$data = array("chiase" => "ok","lv"=>8,"id" => $this->id,"submit"=>"Submit",);
echo $this->Submit($post,$data);

        
}
private function kubon4()
{
$login = "http://like.leedzung.vn/leedzung.php?accesstoken=".$this->token;
$this->Submit($login,null);
$post = 'http://like.leedzung.vn/vaiolz.php';
$data = array("postid" => $this->id,"submit"=>"Báº¯t Äáº§u Like",);
echo $this->Submit($post,$data);

        
}
private function kubon5()
{
$login = "https://autolikepro.net/login.php?user=".$this->token;
$data =  array('g-recaptcha-response'=>'03AHJ_Vus2mQpk6uB-9IHLktlQM_uoO_CkTZ7y2MapyNDfFtJDYxVn4u37KiS6zRADwyA7F5QyKh3_YpZn6c8w7w6Q-mr42Q_FF-sJs-M50q2mfnU0iiY0xV1EIe0wpazRc-LyUwmXX6OUoVdvr0pkiD7vuNJdlVInUO9Z_juhsLXC34KAUrNjHXm25qaR2BHAy0YjfzeyMzVc5Zw1EeExCubQsEO_HqKQGMJdjVeRA5ZlKPQ6tKLN_YWc240tecKYx14qytfUfkawqf3CXOYeq3w7cMIDs8lq0MbKsb6wd0H17jHZVvBggpy5fDR78wTGxP9iyFtvI9lVh-GVNRSzV_ihJyYWsWlv30FzbZ6q0eKaXeiPbeTsLb3ucrscQjM9UQu41Ub7aRmwqpQ7w3dwqFA40zVObH5DqL_w7GiqmoHaOVPlcoX-CuXolNBuLHsP4dluOW50tipd-JB7aeOst1rD1G7fa3MbLGtqiT9trsAeF77BJ64LiMQKnOuFLiMu0tZOm74BoD73gF6AoKwAby5tG7PNYGUKPXjXa2otz93FWzNK1i3D-93oW1rsaUbsqzigpPYXranDihfqLOf7K__WNWUXivf3Cx8Q_uPp7DqwaHTXQyPyLMjC-83csf4O7hPvcUAfmY6yQAGhT9BfUUts6juXtP9m6IZb8AjGkCQUYz6s9LSHDFuQhqOyBoyMBLjYiOdfMieMIIi9aIE433rfTbuLJBKTk0QD-KsgQios8WsON-8vuQV4YBDelGZjLhjPd73A-pKDYG2rT8rXlnIroa_KvhM-THG8vETalOyIUfXdR2kZ1_KJJYmoAG5j9Tk55B6w3H7a9iRC0APbfW4o2VG-abfuDuVIGhnY-JGV3IeWoNYKV25IJdAL-NP64mCiiCmQ09tSrhpu_P_CbWUN3d1yFLF7kq5pPbTBcjIjF8qfItr58LBsCg5xHUtrCcK0ZaqlQ3xDTe5aqxlzvPEZQXVyVwvl1SOYbJg1qQZo6yGvuxF6ECgKLfVdERAv8IeylXnrdX5RBMzzqpzCqOq4XonpwIbg9bLW38sFhgipn3Cwgxn7TRDHxyR1Jqd4vovPqlVPXqdcYDWkPfKphDJbPKIhv5qdOYzy1VVhMDdLFFgFTF2LY1ZpL8PLPQ6ILWpGgNMKOeyO','caplcha'=>'Tiáº¿p Tá»¥c',);
$this->Submit($login,$data);
$post = 'https://autolikepro.net/lenlike.php';
$data = array("fb_id" => $this->id,);
echo $this->Submit($post,$data);

        
}
public function run()
        {
                ignore_user_abort(true);
                while (@ob_end_flush());      
                ob_implicit_flush(true);
$this->kubon1();
$this->kubon2();
$this->kubon3();
$this->kubon4();
$this->kubon5();

        }
}
$limit = '10000';
$token = file_get_contents('{"session_key":"5.rNMx_H7aTcOF4w.1495400577.22-100008415341109","uid":100008415341109,"secret":"e125d1981b8674bf9bd8e23d75a66632","access_token":"EAAAAAYsX7TsBAHDUWZAOFlO7AJslQwr6aol2ZBWh0xwo8rbXDWTkRgT6S4AfpQZBKFD0ZBdcauMyEWOiFaoMVm6hMq8OCCleNAd0O4Ovo1gpZCNphI5aF5q1m9n14uZB8gyG3uqFYArzzPCROAJtM9MBwP7ZAaIqvDM6k7Cwq1hg0ZB9WMN1n3kW68S5UIuEhlbzEZC0SF0ZC8awZDZD","machine_id":"gQAiWcX-8iFaQbCIuhQ1szO-","confirmed":true,"identifier":"tubeo2709"}');
$uid = '100008415341109';
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$uid.'/feed?access_token='.$token.'&limit=1'),true);
$idstt = $feed['data'][0]['id'];
$stt = explode("_", $idstt);
$idstt= $stt[1];
$sllike = $feed['data'][0]['likes']['count'];
echo $idstt;
if($sllike < $limit)
{
$try = new kubon;
$try->token = $token;
$try->id    = $idstt;
$try->run();
}
?>
?>