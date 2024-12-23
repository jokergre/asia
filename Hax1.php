<?php 

set_time_limit(0); ini_set('memory_limit', '256M');  error_reporting(0); ini_set('display_errors', 1); ignore_user_abort(true); ini_set('max_execution_time', 300);
mkdir('ACV');
mkdir('ACV/'.USR_BOT);
$config = [
    'admin'=> $sudo,
    'token'=> API_KEY,
    'error_report' => 0,
    'api_url' => 'api.telegram.org',
    'msg_error' => 'Req Failed .',
    'type_up' => 'php://input',
    'task' => 'ACV/'.USR_BOT.'/tasks.bot',
    'ent' => 'ACV/'.USR_BOT.'/ent.bot',
    'name_' => 'ACV/'.USR_BOT.'/modes.bot',
    'enters_' => 'ACV/'.USR_BOT.'/enters.bot',
    'ford' => 'ACV/'.USR_BOT.'/fords.bot',
    'izr' => 'ACV/'.USR_BOT.'/izr.bot',
    'rdod' => 'ACV/'.USR_BOT.'/rdods.bot',
    'str_' => 'ACV/'.USR_BOT.'/start.bot',
    'start_msg' => "
",
    'command' => 'ACV/'.USR_BOT.'/com 😍t',
    'admins'=>'ACV/'.USR_BOT.'/admins_x.bot',
    'shtrak' => 'ACV/'.USR_BOT.'/shtrak.bot',
    'helper' => 'ACV/'.USR_BOT.'/help.bot',
    'member' => 'ACV/'.USR_BOT.'/members.bot',
    'chanel' => 'ACV/'.USR_BOT.'/channels.bot',
    'grop' => 'ACV/'.USR_BOT.'/groups_ids.bot',
    'block' => 'ACV/'.USR_BOT.'/blockers.bot',
];
error_reporting($config['error_report']);

$admin = $config['admin'];
function getCountFromFile($filename)
{
    $content = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $content !== false && $content !== '' ? count($content) : 0;
}

function format_number($number) {
    $suffixes = array('', 'k', 'm', 'b', 't');
    $suffix_index = 0;

    while ($number >= 1000) {
        $number /= 1000;
        $suffix_index++;
    }

    return round($number, 1) . $suffixes[$suffix_index];
}


define("X_",bot('getme')->result->username);


$update = json_decode(file_get_contents($config['type_up']));

if($update->callback_query ){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}

   
if($update->message){
$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
$task_name = $config['task'];
$ent_name = $config['ent'];
$mode_name = $config['name_'];
$entars_name = $config['enters_'];
$fords_name = $config['ford'];
$rdod_name = $config['rdod'];
$start_name = $config['str_'];
$command_name = $config['command'];
$admin_name = $config['admins'];
$shtrak_name = $config['shtrak'];
$helper_name = $config['helper'];
$member_name = $config['member'];
$chanel_name = $config['chanel'];
$izr_name = $config['izr'];
$group_name = $confifg['grop'];
$blockers_name = $config['block'];
$tasks = json_decode(file_get_contents("$task_name"), true);
$xts = json_decode(file_get_contents("$command_name"), true);
$bot_enter = json_decode(file_get_contents("$ent_name"), true);
$modes = json_decode(file_get_contents("$mode_name"), true);
$enters = json_decode(file_get_contents("$entars_name"), true);
$fords = json_decode(file_get_contents("$fords_name"), true);
$rdod = json_decode(file_get_contents("$rdod_name"), true);
$start_sock = json_decode(file_get_contents("$start_name"), true);
$izr_sock = json_decode(file_get_contents("$izr_name"), true);
$admins = json_decode(file_get_contents("$admin_name"), true);
$shtrak = json_decode(file_get_contents("$shtrak_name"), true);
$helper = json_decode(file_get_contents("$helper_name"), true);
$blockers = json_decode(file_get_contents("$blockers_name"), true);
mkdir("FCZR") ;
mkdir("FCZR/". X_);
$zr = json_decode(file_get_contents("FCZR/". X_. "/zr.json"),true);

if(!file_exists("$shtrak_name")){
    $shtrak["start"] = '✅';
    $shtrak["inline"] = '✅';
    $shtrak["notife"] = '✅';
    $shtrak["markdown"] = '✅';
    $shtrak["check"] = '✅';
    $shtrak['CHANNELS'][] = "start";
    file_put_contents("$shtrak_name",json_encode($shtrak));
}

if(!file_exists("$admin_name")){
    $admins[0] = 75;
    file_put_contents("$admin_name",json_encode($admins));
}

if(!file_exists("$start_name")){
    $start_sock['mode'] = "✅";
    file_put_contents("$start_name",json_encode($start_sock));
}

if(!file_exists("$izr_name")){
    $izr_sock['mode'] = "✅";
    file_put_contents("$izr_name",json_encode($start_sock));
}

if(!file_exists("$command_name")){
    $xts["commands"][] = "start - رساله البدء";
    file_put_contents("$command_name",json_encode($xts));
}

if(!file_exists("$task_name")){
    $tasks['notife'] = "✅";
    $tasks['th'] = "✅";
    file_put_contents("$task_name",json_encode($tasks));
}

if(!file_exists("$ent_name")){
    $bot_enter['bot'] = "✅";
    file_put_contents("$ent_name",json_encode($bot_enter));
}

if(!file_exists("$rdod_name")){
    $rdod['stat'] = "✅";
    file_put_contents("$rdod_name",json_encode($rdod));
}

if(!file_exists("$fords_name")){
    $fords['autodel'] = "❌";
    $fords['del'] = "❌";
    $fords['toother'] = "❌";
    $fords['reply'] = "✅";
    file_put_contents("$fords_name",json_encode($fords));
}

$count_eners = count($enters["mems"][$bot_enter["link"]]);
$start_msg = $start_sock["msg"];
if($start_msg == null){
$start_msg = $config['start_msg'];
}
$admin = $sudo;
$msg_sh = $config['msg_sh'];
$count_ecw =  $enters["mems-1"][$bot_enter["link"]] ?? "0";
if($from_id == $admin or in_array($from_id,$admins) or $chat_id == $sudo){

if($text == "/start"){
bot("sendmessage",[
    'chat_id' => $chat_id,
    'text' => "
• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[

		[['text'=>' 🛍','callback_data'=>"Brook"]],
	]
	])
]);
unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);

}
if($data=="Hax78"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
                     [['text'=>" • رجوع •  ",'callback_data'=>"paneel"]],
               ]
         ])
 ]);
}
if($data == "xtsars"){
    $Dr = ['inline_keyboard' => []];
    foreach ($xts["commands"] as $au){
        $a = explode(" - ",$au)[0];
        $n = array_search($au,$xts["commands"]);
        $Dr['inline_keyboard'][] =  [['text'=>"$a",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delcm_$n"]];
    }
    $Dr['inline_keyboard'][] =  [['text'=>'مسح جميع الاختصارات','callback_data'=>"delalcmd"],['text'=>"اضافه اختصار",'callback_data'=>"addxs"]];
    $Dr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"startmsg"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاختصارات ✨

- يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Dr)
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));
unset($zr['mode']);
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

$task_ex = explode("delcm_",$data)[1];
if($task_ex){
    unset($xts["commands"][$task_ex]);
    file_put_contents("$command_name",json_encode($xts));
    $Dr = ['inline_keyboard' => []];
    foreach ($xts["commands"] as $au){
        $a = explode(" - ",$au)[0];
        $n = array_search($au,$xts["commands"]);
        $Dr['inline_keyboard'][] =  [['text'=>"$a",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delcm_$n"]];
    }
    $Dr['inline_keyboard'][] =  [['text'=>'مسح جميع الاختصارات','callback_data'=>"delalcmd"],['text'=>"اضافه اختصار",'callback_data'=>"addxs"]];
    $Dr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"startmsg"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاختصارات ✨

- يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Dr)
    ]);
}

if($data == "addxs"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل الاختصار الان بالشكل التالي : 
`
start - رساله البدء
`
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"xtsars"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}


if($data == "delalcmd"){
    unset($xts["commands"]);
    file_put_contents("$command_name",json_encode($xts));
    bot('answerCallbackQuery',[ 
        'callback_query_id'=>$update->callback_query->id, 
        'text'=>"
        • تم مسح جميع الاختصارات !
", 
        'show_alert'=>true
        ]); 
        
        bot('deleteMyCommands');
        $Dr = ['inline_keyboard' => []];
        foreach ($xts["commands"] as $au){
            $a = explode(" - ",$au)[0];
            $n = array_search($au,$xts["commands"]);
            $Dr['inline_keyboard'][] =  [['text'=>"$a",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delcm_$n"]];
        }
        $Dr['inline_keyboard'][] =  [['text'=>'مسح جميع الاختصارات','callback_data'=>"delalcmd"],['text'=>"اضافه اختصار",'callback_data'=>"addxs"]];
        $Dr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"startmsg"]];
        bot("editmessagetext",[
            'chat_id' => $chat_id,
            "message_id"=>$message_id,
            'text' => "
    • مرحبا بك في قسم الاختصارات ✨
    
    - يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode($Dr)
        ]);
}


$xc = explode(" - ",$text);
if($modes[$from_id] == 'addxs'){
if($xc[0] and $xc[1]){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ !
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'رجوع','callback_data'=>"xtsars"]],
        ]
        ])
    ]);
    $xts["commands"][] = $text;
    file_put_contents("$command_name",json_encode($xts));
    
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}
}


if($data == "startmsg"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم رساله الترحيب (/start) 🌾
- ستظهر هذه الرساله عند ارسال (/start) الى البوت الخاص بك 

- ارساله الحاليه :

`$start_msg`
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الازرار الشفافه','callback_data'=>"azrars"]],
        [['text'=>'الاختصارات','callback_data'=>"xtsars"]],
        [['text'=>'تعيين الرساله','callback_data'=>"set_start"],['text'=>'مسح الرساله' ,'callback_data'=>"del_start"]],
        [['text'=>'رد علي الرسائل : ' . $start_sock["mode"],'callback_data'=>"start_sock_mode"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}




$privates = getCountFromFile("$member_name");
$chanel_get = getCountFromFile("$chanel_name");
$group_get = getCountFromFile("$group_name");

$names_file = "&member=$member_name&chanel=$chanel_name&groups=$group_get";
$groupes = $chanel_get + $group_get;
$all = $privates + $groupes;
$blok_c = count($blockers);
	$botfile = $UploadEr["FileMatch"]??"0";
$s_all = format_number($all);

$d = date('D');
mkdir('onliner');
$day = explode("\n",file_get_contents("onliner/".USR_BOT."/".$d.".txt"));
if($d == "Sat"){
unlink("onliner/Fri.txt");
}
if($d == "Sun"){
unlink("onliner/Sat.txt");
}
if($d == "Mon"){
unlink("onliner/Sun.txt");
}
if($d == "Tue"){
unlink("onliner/Mon.txt");
}
if($d == "Wed"){
unlink("onliner/The.txt");
}
if($d == "Thu"){
unlink("onliner/Wed.txt");
}
if($d == "Fri"){
unlink("onliner/Thu.txt");
}

mkdir('onliner');
mkdir("onliner/".USR_BOT);
$online_fiday = getCountFromFile("onliner/".USR_BOT."/".$d.".txt");

$filename = "onliner/".USR_BOT."/".$d.".txt";

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $lastFiveIds = array_slice($lines, -5);
    $t = 0;
    foreach ($lastFiveIds as $id) {
        $t +=1;
        $ns = $ns." \n $t. [$id](tg://user?id=$id)";
    }
}




if($data == "statebot"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
مرحبا بك في قسم الاحصائيات 📊 

• عدد المسخدمين الكلي : $all | $s_all
- عدد المستخدمين في الخاص : $privates
- عدد الكروبات والقنوات : $groupes
- عدد القنوات : $chanel_get
- عدد الكروبات : $group_get
        
• عدد المحظورين : $blok_c
        
• عدد المتفاعلين اليوم : $online_fiday
        
- قائمة اخر الاعضاء الذين شتركوا :
$ns
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'مسح المحظورين','callback_data'=>"del_blocks"]],
        [['text'=>'حظر شخص','callback_data'=>"block_person"],['text'=>'الغاء حظر شخص','callback_data'=>"unblock_person"]],
        [['text'=>'قسم الاذاعه','callback_data'=>"broadcast"]],
		[['text'=>'قسم النسخ الاحتياطيه','callback_data'=>"backsup"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}


if($data == "backsup"){

	bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
مرحبا بك في قسم النسخ الاحتيايطه لملف الاحصائيات 
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رفع نسخه','callback_data'=>"upload_back"]],
        [['text'=>'جلب نسخه كل الاحصائيات','callback_data'=>"get_all"]],
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
	die();
}

if($data == "upload_back"){
	bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
- ارسل ملف النسخه يجب ان يكون بصيغه ( .bot )
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"backsup"]],
	]
	])
    ]);
	$modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($modes[$from_id] == "upload_back"){
if($update->message->document){
    $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->document->file_id])->result->file_path;
    if(pathinfo($file_id, PATHINFO_EXTENSION) == "bot"){
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "تم رفع الملف بنجاح .",
            "parse_mode" => "marKdown",
			'reply_markup'=>json_encode([ 
				'inline_keyboard'=>[
					[['text'=>'رجوع','callback_data'=>"backsup"]],
				]
				])
        ]);
		file_put_contents('ACV/'.USR_BOT.'/'.$update->message->document->file_name,file_get_contents($file_id));
		unset($modes[$from_id]);
		file_put_contents("$mode_name",json_encode($modes));

        }else{
			bot("sendmessage",[
				"chat_id" => $chat_id,
				"text" =>"- ركز عزيزي ارسل الملف بصيغه ( .bot )",
				"parse_mode" => "marKdown",
				'reply_markup'=>json_encode([ 
					'inline_keyboard'=>[
						[['text'=>'رجوع','callback_data'=>"backsup"]],
					]
					])
			]); 
			unset($modes[$from_id]);
		file_put_contents("$mode_name",json_encode($modes));
		}
}
}

if($data == "get_all"){
	bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
- يتم ارسال الاحصائيات 
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"backsup"]],
	]
	])
    ]);
	bot("senddocument",[
        'chat_id' => $chat_id,
		'document' => new CURLFile($member_name),
        'caption' => "
- ملف الاعضاء
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,

    ]);
	bot("senddocument",[
        'chat_id' => $chat_id,
		'document' => new CURLFile($chanel_name),
        'caption' => "
- ملف القنوات
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,

    ]);
	bot("senddocument",[
        'chat_id' => $chat_id,
		'document' => new CURLFile($group_name),
        'caption' => "
- ملف الكروبات
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,

    ]);
	die();
}
if($data == 'del_blocks'){
    bot('answerCallbackQuery',[ 
        'callback_query_id'=>$update->callback_query->id, 
        'text'=>"
• تم مسح المحظورين بنجاح .
", 
        'show_alert'=>false
        ]); 
        unset($blockers);
        file_put_contents("$blockers_name",json_encode($blockers));
        bot("editmessagetext",[
            'chat_id' => $chat_id,
            "message_id"=>$message_id,
            'text' => "
    مرحبا بك في قسم الاحصائيات 📊 
    
    • عدد المسخدمين الكلي : $all | $s_all
    - عدد المستخدمين في الخاص : $privates
    - عدد الكروبات والقنوات : $groupes
    - عدد القنوات : $chanel_get
    - عدد الكروبات : $group_get
            
    • عدد المحظورين : 0
            
    • عدد المتفاعلين اليوم : $online_fiday
            
    - قائمة اخر الاعضاء الذين شتركوا :
$ns
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'مسح المحظورين','callback_data'=>"del_blocks"]],
            [['text'=>'حظر شخص','callback_data'=>"block_person"],['text'=>'الغاء حظر شخص','callback_data'=>"unblock_person"]],
            [['text'=>'قسم الاذاعه','callback_data'=>"broadcast"]],
			[['text'=>'قسم النسخ الاحتياطيه','callback_data'=>"backsup"]],
            [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
        ]);
    
}


if($data == 'unblock_person'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
- ارسل ايدي الشخص او معرف الشخص لكي اقوم بالغاء حظره من البوت
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}


if($text and $modes[$from_id] == 'unblock_person'){
    if($blockers[$text] == true){
    bot("SendMessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الغاء الحظر عن المستخدم بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    unset($blockers[$text]);
    file_put_contents("$blockers_name",json_encode($blockers));

    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}else{
    bot("SendMessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• المستخدم غير محظور بالفعل !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}
}

if($data == 'block_person'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
- ارسل ايدي الشخص او معرف الشخص لكي اقوم بحظره من البوت
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == 'block_person'){
    if($blockers[$text] != true){
    bot("SendMessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم حظر المستخدم بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    $blockers[$text] = true;
    file_put_contents("$blockers_name",json_encode($blockers));

    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}else{
    bot("SendMessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• المستخدم محظور من قبل !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}
}


if($data == "del_start"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح رساله start والرجوع الى الرساله الاصلية !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"startmsg"]],
	]
	])
    ]);
    unset($start_sock["msg"]);
    file_put_contents("$start_name",json_encode($start_sock));
}

if($data == "set_start"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه الstart من خلال استخدام الاهاشتاكات التاليه :
[    
1. #name_user : لوضع اسم شخص ووضع معرفه داخل اسمه 
2. #username : لوضع اسم مستخدم الشخص مع اضافه @ 
3. #name : لوضع اسم الشخص
4. #id : لوضع ايدي الشخص 
5. #coins لعرض عدد نقاط الشخص
6. #tlbs لعرض عدد طلبات البوت
7. #shares لعرض عدد مشاركات الرابط
8. #xtlb لعرض عدد طلبات الشخص
    ]  
يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"startmsg"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == 'set_start'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• مثال على الرساله : 

$text
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
    ]);
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
                           
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"startmsg"]],
	]
	])
    ]);
    $start_sock["msg"] = $text;
    file_put_contents("$start_name",json_encode($start_sock));
    unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}

if($data == "paneel"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
    //    [['text'=>'أخر تحديثات البوت ⚙️','url'=>"https://t.me/hax"]],
      //  [['text'=>" موقع الرشق الاساسي 💠 ",'url'=>"https://kd1s.com"]], 
      //  [['text'=>'عمل البوت','callback_data'=>"botstat"],['text'=>'اشعار الدخول : '. $tasks['notife'] ,'callback_data'=>"tasks_notife"]],
      //  [['text'=>'الردود','callback_data'=>"rdod"],['text'=>'تعديل الازرار','callback_data'=>"azrars"],['text'=>'توجيه الرسائل','callback_data'=>"frdrs"]],
      //  [['text'=>'رساله الترحيب (start)','callback_data'=>"startmsg"]],
       // [['text'=>' الاشتراك الاجباري','callback_data'=>"shtraks"],['text'=>'قسم الأدمنيه','callback_data'=>"admins_bot"]],
      //  [['text'=>'الاشتراك المدفوع 🔇','callback_data'=>"Hax78"]],
      //  [['text'=>'قسم الاذاعه','callback_data'=>"broDa"],['text'=>'قسم الأحصائيات','callback_data'=>"statebot"]],
		[['text'=>' 🛍','callback_data'=>"Brook"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}


if($data == "strak_3"){

    $sh_ms = $shtrak['bot']['link'];
    if($sh_ms == null){
        $sh_ms = 'لايوجد';
    }

    $msg_whm = $shtrak['bot']['msg'];
    if($msg_whm == null){
$msg_whm = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بالبوت لتتمكن من استخدامه

- $sh_ms

‼️| اشترك في البوت من ثم ارسل /start
";
    }  
bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- رابط البوت : [$sh_ms]
- رساله الاشتراك الاساسية : `$msg_whm`
        
‼️| اشترك في البوت من ثم ارسل /start
        
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'تعيين البوت','callback_data'=>"set_bot"],['text'=>'مسح الاشتراك','callback_data'=>"del_bot"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"setmsg_bot"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : بوت','callback_data'=>"shtraks"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

#ms_bot


if($data == "setmsg_bot"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل كليشه الاشتراك مع رابط البوت الذي قمت بتعينه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الرجوع للكليشه الاساسيه !!','callback_data'=>"delmsg_bot"]],
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($data == "delmsg_bot"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الرجوع الى الكليشه الاساسيه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
unset($shtrak['bot']['msg']);
file_put_contents("$shtrak_name",json_encode($shtrak));
die();
}

if($text and $modes[$from_id] == 'setmsg_bot'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
    $shtrak['bot']['msg'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}

if($data == "del_bot"){

    $sh_ms = $shtrak['bot']['link'];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح وتعطيل الاشتراك الاجباري !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
    if($sh_ms != null){
unset($shtrak['bot']['link']);
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($helper['bot'][$sh_ms]);
file_put_contents("$helper_name",json_encode($helper));
    }
die();
}

if($data == "set_bot"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل معرف البوت ( يجب ان يكون مع @ !! )
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($text and $modes[$from_id] == 'set_bot'){
    if(preg_match("/@/",$text)){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
    $shtrak['bot']['link'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}
}


#end bot


if($data == "strak_2"){

    $sh_ms = $shtrak['socail']['link'];
    if($sh_ms == null){
        $sh_ms = 'لايوجد';
    }

    $msg_whm = $shtrak['socail']['msg'];
    if($msg_whm == null){
$msg_whm = "
    🚸| عذرا عزيزي
🔰| عليك متابعه حسابي
        
- $sh_ms
        
‼️| تابعني من ثم ارسل /start
        
.

";
    }  
bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- رابط الحساب : [$sh_ms]
- رساله الاشتراك الاساسية : `$msg_whm`
        
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'تعيين رابط الحساب','callback_data'=>"sestlink"],['text'=>'مسح الاشتراك','callback_data'=>"dellink"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"setmsg_1"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : حساب سوشيال ميديا','callback_data'=>"strak_3"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

if($data == "setmsg_1"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل كليشه الاشتراك مع رابط حسابك الذي قمت بتعينه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الرجوع للكليشه الاساسيه !!','callback_data'=>"delmsg_1"]],
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($data == "delmsg_1"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الرجوع الى الكليشه الاساسيه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
unset($shtrak['socail']['msg']);
file_put_contents("$shtrak_name",json_encode($shtrak));
die();
}

if($text and $modes[$from_id] == 'setmsg_1'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
    $shtrak['socail']['msg'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}

if($data == "dellink"){

    $sh_ms = $shtrak['socail']['link'];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح وتعطيل الاشتراك الاجباري !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
    if($sh_ms != null){
unset($shtrak['socail']['link']);
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($helper[$sh_ms]);
file_put_contents("$helper_name",json_encode($helper));
    }
die();
}

if($data == "sestlink"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل رابط حسابك في اي موقع من مواقع التواصل الاجتماعي .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($text and $modes[$from_id] == 'sestlink'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
    $shtrak['socail']['link'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}

if($data == "shtraks"){
    $ch_shtrak =  $shtrak['CHANNEL_ASAS'];
    if(preg_match("/@/",$ch_shtrak)){
        $ch_shtrak = $ch_shtrak;
    }elseif(preg_match("/-/",$ch_shtrak)){
        if($shtrak['linker'][$ch_shtrak] == null){
        $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
        $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
        file_put_contents("$shtrak_name",json_encode($shtrak));
        }else{
            $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        }
    }else{
        $ch_shtrak = "لايوجد";
    }

    $msg_shtrak = $shtrak['MSG_CHANNEL_ASAS'];
    if($msg_shtrak == null){
        $msg_shtrak = "
📫| عذراً، عليك الأشتراك في قناة 
البوت أولاً ‼️        
- $ch_shtrak
- أشترك ثم أضغط /start 🔹
        ";
    }

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- قناة الاشتراك الاساسية : `$ch_shtrak`
- رساله الاشتراك الاساسية : `$msg_shtrak`
        
- وضع الاداء : يقوم بتحقق من اشتراك الشخص في رساله /start فقط 
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'تعيين القناة','callback_data'=>"sestch"],['text'=>'مسح القناة','callback_data'=>"delch"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"shmsg"]],
        [['text'=>'وضع الاداء : ' . $shtrak["start"],'callback_data'=>"shtrak_start"],['text'=>'اشعار الاشتراك : ' . $shtrak["notife"],'callback_data'=>"shtrak_notife"]],
        [['text'=>'ازرار شفافه : ' . $shtrak["inline"],'callback_data'=>"shtrak_inline"],['text'=>'ماركداون : ' . $shtrak["markdown"],'callback_data'=>"shtrak_markdown"]],
        [['text'=>'زر التحقق من الاشتراك : ' . $shtrak["check"],'callback_data'=>"shtrak_check"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : قناة تيليكرام','callback_data'=>"strak_2"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}


if($data == "shtraks"){
    $ch_shtrak =  $shtrak['CHANNEL_ASAS'];
    if(preg_match("/@/",$ch_shtrak)){
        $ch_shtrak = $ch_shtrak;
    }elseif(preg_match("/-/",$ch_shtrak)){
        if($shtrak['linker'][$ch_shtrak] == null){
        $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
        $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
        file_put_contents("$shtrak_name",json_encode($shtrak));
        }else{
            $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        }
    }else{
        $ch_shtrak = "لايوجد";
    }

    $msg_shtrak = $shtrak['MSG_CHANNEL_ASAS'];
    if($msg_shtrak == null){
        $msg_shtrak = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه
        
- $ch_shtrak
        
 ثم اضغط /start 🔹
        ";
    }

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- قناة الاشتراك الاساسية : `$ch_shtrak`
- رساله الاشتراك الاساسية : `$msg_shtrak`
        
- وضع الاداء : يقوم بتحقق من اشتراك الشخص في رساله /start فقط 
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'تعيين القناة','callback_data'=>"sestch"],['text'=>'مسح القناة','callback_data'=>"delch"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"shmsg"]],
        [['text'=>'وضع الاداء : ' . $shtrak["start"],'callback_data'=>"shtrak_start"],['text'=>'اشعار الاشتراك : ' . $shtrak["notife"],'callback_data'=>"shtrak_notife"]],
        [['text'=>'ازرار شفافه : ' . $shtrak["inline"],'callback_data'=>"shtrak_inline"],['text'=>'ماركداون : ' . $shtrak["markdown"],'callback_data'=>"shtrak_markdown"]],
        [['text'=>'زر التحقق من الاشتراك : ' . $shtrak["check"],'callback_data'=>"shtrak_check"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : قناة تيليكرام','callback_data'=>"strak_1"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

if($data == "second_ch"){
    $Lr = ['inline_keyboard' => []];
    foreach ($shtrak['CHANNELS'] as $chs){
        $u = array_search($chs , $shtrak['CHANNELS']);
        if($chs != "start"){
            $Lr['inline_keyboard'][] =  [['text'=>"$chs",'callback_data'=>"control_$u"],['text'=>'🗑','callback_data'=>"delch_$u"]];
        }
    }
        $Lr['inline_keyboard'][] =  [['text'=>'اضافه قناة جديده','callback_data'=>"add_chanell"]];
        $Lr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"shtraks"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري الثانوي ⚙️

- يمكنك وضع 5 قنوات فقط 
        
- الاشتراك سيظهر عند ضغط /start فقط لكي لا يؤثر على عمل البوت 
ستظهر قناة الاشتراك الاساسية اولا !
        
- اضغط على القناة لتعديل رساله الاشتراك الاجباري او تعين عدد المستخدمين المطلوب.
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Lr)
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));
unset($zr['mode']);
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}


$Le = explode("control_",$data)[1];

if($Le){

$output = $shtrak['CHANNELS'][$Le];
if(preg_match("/-/",$output)){
$ch_shtrak = $output;
    if(preg_match("/@/",$ch_shtrak)){
        $ch_shtrak = $ch_shtrak;
    }elseif(preg_match("/-/",$ch_shtrak)){
        if($shtrak['linker'][$ch_shtrak] == null){
        $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
        $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
        file_put_contents("$shtrak_name",json_encode($shtrak));
        }else{
            $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        }
    }else{
        $ch_shtrak = "لايوجد";
    }

}else{
    $ch_shtrak = $output;
}

$msg_sh = $shtrak["info"][$Le]['msg'];
if($msg_sh == null){
    $msg_sh = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه
        
- $ch_shtrak
 ثم اضغط /start 🔹
    ";
}
$ineed = $shtrak["info"][$Le]['cc'] ?? "0";
$doneneed = $shtrak["info"][$Le]['doneneed'] ?? "0";
if($ineed == null){
    $ineed = 0;
}
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• القناة : [$ch_shtrak]

• عدد المشتركين المطلوب : $ineed
        
• تم الدخول : $doneneed
        
• رساله الاشتراك : 
`$msg_sh`
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"setsh_$Le"]],
                            [['text'=>'الرجوع للكليشه الاساسيه','callback_data'=>"delsh_$Le"]],
                            [['text'=>'تعيين العدد المطلوب','callback_data'=>"counts_$Le"]],
                            [['text'=>'رجوع','callback_data'=>"second_ch"]],
                        ]
                        ])
    ]);
}

$Le = explode("delsh_",$data)[1];

if($Le){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح كليشه الاشتراك ورجوع الى الكليشة الاساسية .
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    unset($shtrak["info"][$Le]['msg']);
file_put_contents("$shtrak_name",json_encode($shtrak));
}

$Le = explode("setsh_",$data)[1];

if($Le){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل كليشه الاشتراك الان .
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'الرجوع للكليشه الاساسيه','callback_data'=>"delsh_$Le"]],
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    $modes[$from_id] = "set_sh";
    $modes['helper'][$from_id] = $Le;
file_put_contents("$mode_name",json_encode($modes));
}


$Le = explode("counts_",$data)[1];

if($Le){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
 • ارسل عدد المشتركين المطلوب .
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    $modes[$from_id] = "set_CC";
    $modes['helper'][$from_id] = $Le;
file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == "set_CC"){
    $Le = $modes['helper'][$from_id];
    bot("sendmessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الحفظ بنجاح
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    unset($modes[$from_id]);
    unset($modes[$from_id]['helper']);
file_put_contents("$mode_name",json_encode($modes));

$shtrak["info"][$Le]['cc'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));
}

if($text and $modes[$from_id] == "set_sh"){
    $Le = $modes['helper'][$from_id];
    bot("sendmessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم حفظ الكليشه .
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    unset($modes[$from_id]);
    unset($modes[$from_id]['helper']);
file_put_contents("$mode_name",json_encode($modes));

$shtrak["info"][$Le]['msg'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));
}



$Le = explode("delch_",$data)[1];

if($Le){
    unset($shtrak['CHANNELS'][$Le]);
    file_put_contents("$shtrak_name",json_encode($shtrak));
    $Lr = ['inline_keyboard' => []];
    foreach ($shtrak['CHANNELS'] as $chs){
        $u = array_search($chs , $shtrak['CHANNELS']);
        if($chs != "start"){
            $Lr['inline_keyboard'][] =  [['text'=>"$chs",'callback_data'=>"control_$u"],['text'=>'🗑','callback_data'=>"delch_$u"]];
        }
        }
        $Lr['inline_keyboard'][] =  [['text'=>'اضافه قناة جديده','callback_data'=>"add_chanell"]];
        $Lr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"shtraks"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري الثانوي ⚙️

- يمكنك وضع 5 قنوات فقط 
        
- الاشتراك سيظهر عند ضغط /start فقط لكي لا يؤثر على عمل البوت 
ستظهر قناة الاشتراك الاساسية اولا !
        
- اضغط على القناة لتعديل رساله الاشتراك الاجباري او تعين عدد المستخدمين المطلوب.
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Lr)
    ]);
}

if($data == "add_chanell"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• قم برفع البوت ادمن في قناتك او مجموعتك اولا 🌟

• من ثم ارسال معرف القناة او قم بعمل توجيه لاي منشور من قناتك الى البوت
• يمكنك وضع شتراك جباري لمجموعتك عن طريق اضافه البوت الى المجموعة وارسل 'تفعيل الاشتراك' .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($modes[$from_id] == 'add_chanell'){

    if($update->message->forward_from_chat->id){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $update->message->forward_from_chat->id, 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الي الاشتراك الاجباري .
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
        ]);
        $shtrak['CHANNELS'][] = $update->message->forward_from_chat->id;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
        deie();
    } else {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• البوت ليس ادمن !!
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
        ]);
    }
    }

    if(preg_match("/@/",$text)){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $text , 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الي الاشتراك الاجباري .
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
        ]);
        $shtrak['CHANNELS'][] = $text;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        die();
    }else{
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• البوت ليس ادمن !!
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
        ]);
    }
    }
if($text == "تفعيل الاشتراك"){
    if(preg_match("/-/",$text)){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $chat_id , 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
• تم الاضافه الي الاشتراك الاجباري .
                ",
                'parse_mode' => 'MaRKDOWN',
                                'reply_to_message_id' => $message_id,
                                 
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
            ]);
            $shtrak['CHANNELS'][] = $chat_id;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        }else{
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
• البوت ليس ادمنا في القروب !
                ",
                'parse_mode' => 'MaRKDOWN',
                                'reply_to_message_id' => $message_id,
                                 
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
            ]);
        }
    }
}

}


if($data == 'shmsg'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل كليشه الاشتراك الان
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الرجوع للكليشه الاساسيه','callback_data'=>"msgdefault"]],
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($data == 'msgdefault'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الرجوع الى الكليشه الاساسيه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));

    unset($shtrak['MSG_CHANNEL_ASAS']);
    file_put_contents("$shtrak_name",json_encode($shtrak));
}


if($text and $modes[$from_id] == 'shmsg'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
                         
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
    [['text'=>'رجوع','callback_data'=>"shtraks"]],
]
])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));

    $shtrak['MSG_CHANNEL_ASAS'] = $text;
    file_put_contents("$shtrak_name",json_encode($shtrak));
}



if($data == 'delch'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح وتعطيل الاشتراك الاجباري !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));

    unset($shtrak['CHANNEL_ASAS']);
    file_put_contents("$shtrak_name",json_encode($shtrak));
}

if($data == 'sestch'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• قم برفع البوت ادمن في قناتك او مجموعتك اولا 🌟

• من ثم ارسال معرف القناة او قم بعمل توجيه لاي منشور من قناتك الى البوت
• يمكنك وضع شتراك جباري لمجموعتك عن طريق اضافه البوت الى المجموعة وارسل 'تفعيل الاشتراك' .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($modes[$from_id] == 'sestch'){

    if($update->message->forward_from_chat->id){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $update->message->forward_from_chat->id, 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الي الاشتراك الاجباري .
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
        ]);
        $shtrak['CHANNEL_ASAS'] = $update->message->forward_from_chat->id;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
        deie();
    } else {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• البوت ليس ادمن !!
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
        ]);
    }
    }

    if(preg_match("/@/",$text)){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $text , 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الي الاشتراك الاجباري .
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
        ]);
        $shtrak['CHANNEL_ASAS'] = $text;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        die();
    }else{
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• البوت ليس ادمن !!
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
        ]);
    }
    }
if($text == "تفعيل الاشتراك"){
    if(preg_match("/-/",$text)){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $chat_id , 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
• تم الاضافه الي الاشتراك الاجباري .
                ",
                'parse_mode' => 'MaRKDOWN',
                                'reply_to_message_id' => $message_id,
                                 
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
            ]);
            $shtrak['CHANNEL_ASAS'] = $chat_id;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        }else{
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
• البوت ليس ادمنا في القروب !
                ",
                'parse_mode' => 'MaRKDOWN',
                                'reply_to_message_id' => $message_id,
                                 
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
            ]);
        }
    }
}

}

$task_ex = explode("shtrak_",$data)[1];
if($task_ex){
    $Y = $shtrak[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $shtrak[$task_ex] = $t;
    file_put_contents("$shtrak_name",json_encode($shtrak));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- قناة الاشتراك الاساسية : `$ch_shtrak`
- رساله الاشتراك الاساسية : `$msg_shtrak`
        
- وضع الاداء : يقوم بتحقق من اشتراك الشخص في رساله /start فقط 
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        
        [['text'=>'تعيين القناة','callback_data'=>"sestch"],['text'=>'مسح القناة','callback_data'=>"delch"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"shmsg"]],
        [['text'=>'وضع الاداء : ' . $shtrak["start"],'callback_data'=>"shtrak_start"],['text'=>'اشعار الاشتراك : ' . $shtrak["notife"],'callback_data'=>"shtrak_notife"]],
        [['text'=>'ازرار شفافه : ' . $shtrak["inline"],'callback_data'=>"shtrak_inline"],['text'=>'ماركداون : ' . $shtrak["markdown"],'callback_data'=>"shtrak_markdown"]],
        [['text'=>'زر التحقق من الاشتراك : ' . $shtrak["check"],'callback_data'=>"shtrak_check"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : قناة تيليكرام','callback_data'=>"strak_1"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);

}


if($chat_id == $admin){
if($data == "admins_bot"){

    foreach ($admins as $h){
        $n = array_search($h,$admins);
        if($h != "75"){
        $Br['inline_keyboard'][] =  [['text'=>"$h",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delad_$n"]];
        }
    }

    $Br['inline_keyboard'][] =   [['text'=>'اضافه ادمن جديد','callback_data'=>"add_admin"]];
    $Br['inline_keyboard'][] =   [['text'=>'رجوع','callback_data'=>"paneel"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في الادمنيه 👮‍♀️
- يمكنك رفع 5 ادمنيه في البوت او حذفهم 
        
- يمكن للادمنيه تحكم في لوحه البوت مثلك ولا يمكنهم رفع ادمنيه او استلام رسائل الموجهة او سايت او تواصل .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Br)
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

$task_ex = explode("delad_",$data)[1];
if(explode("delad_",$data)[1]){

    unset($admins[$task_ex]);
    
    file_put_contents("$admin_name",json_encode($admins));
    $Br = ['inline_keyboard' => []];
    foreach ($admins as $h){
        $n = array_search($h,$admins);
        if($h != "75"){
            $Br['inline_keyboard'][] =  [['text'=>"$h",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delad_$n"]];
            }
    }

    $Br['inline_keyboard'][] =   [['text'=>'اضافه ادمن جديد','callback_data'=>"add_admin"]];
    $Br['inline_keyboard'][] =   [['text'=>'رجوع','callback_data'=>"paneel"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في الادمنيه 👮‍♀️
- يمكنك رفع 5 ادمنيه في البوت او حذفهم 
        
- يمكن للادمنيه تحكم في لوحه البوت مثلك ولا يمكنهم رفع ادمنيه او استلام رسائل الموجهة او سايت او تواصل .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Br)
    ]);
}

if($data == 'add_admin'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل ايدي الشخص الان او معرف الشخص !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"admins_bot"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($modes[$from_id] == 'add_admin'){
    if(preg_match("/@/",$text) or is_numeric($text)){
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الى الادمنيه بنجاح
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                               
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"admins_bot"]],
	]
	])
        ]);

        $admins[] = $text;
        file_put_contents("$admin_name",json_encode($admins));

        unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));

    }
}
}
$task_ex = explode("inford_",$data)[1];
if($task_ex){
    $tec = $rdod['msg'][$task_ex];
    $rd = $rdod['reply'][$tec];
    if($rd != null){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
الكلمه : $tec
الرد : $rd
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'توقف البوت بعد الرد : ' . $rdod["setting"][$tec]["STOP"],'callback_data'=>"rdset|".$task_ex."_STOP"]],
            [['text'=>'حساسيه الرد : ' .  $rdod["setting"][$tec]["preg"],'callback_data'=>"rdset|".$task_ex."_preg"]],
        ]
        ])
    ]);
}
}



$task_ex = explode("delrd_",$data)[1];
if($task_ex){
    $r = $task_ex;
    unset($rdod["setting"][$rdod['reply'][$rdod['msg'][$r]]]);
    unset($rdod['reply'][$rdod['msg'][$r]]);
    unset($rdod['msg'][$r]);
    file_put_contents("$rdod_name",json_encode($rdod));

    $Ks = ['inline_keyboard' => []];
    foreach($rdod['msg'] as $d){
        $co = array_search($d,$rdod['msg']);

    $Ks['inline_keyboard'][] =  [['text'=>"$d",'callback_data'=>"inford_$co"],['text'=>'🗑','callback_data'=>"delrd_$co"]];
    }
    $Ks['inline_keyboard'][] =  [['text'=>'اضافه رد جديد','callback_data'=>"addrd"],['text'=>'الردود : '. $rdod['stat'],'callback_data'=>"rdod_stat"]];
    $Ks['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"paneel"]];

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الردود 👮‍♀️

- يمكنك اضافه ردود وحذفها 
- يمكنك استخدام الاوامر (اضف رد-مسح رد) 
        
- اضغط على نص الزر لعرض محتواه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Ks)
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));
die();
}

$task_ex = explode("rdset|",$data)[1];
if($task_ex){
    $dat = explode("_",$task_ex);
    $tecs = $dat[1];
    $m = $dat[0];
    $tec = $rdod['msg'][$m];
    $rd = $rdod['reply'][$tec];
    if($rd != null){
    $Y = $rdod["setting"][$tec][$tecs];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $rdod["setting"][$tec][$tecs] = $t;
    file_put_contents("$rdod_name",json_encode($rdod));

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id" => $message_id,
        'text' => "
الكلمه : $tec
الرد : $rd
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'توقف البوت بعد الرد : ' . $rdod["setting"][$tec]["STOP"],'callback_data'=>"rdset|".$m."_STOP"]],
            [['text'=>'حساسيه الرد : ' .  $rdod["setting"][$tec]["preg"],'callback_data'=>"rdset|".$m."_preg"]],
        ]
        ])
    ]);
    unset($modes[$from_id]);
    unset($modes['rd'][$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
    die();
    }
}

if($data == "rdod"){
    $Ks = ['inline_keyboard' => []];
    foreach($rdod['msg'] as $d){
        $co = array_search($d,$rdod['msg']);

    $Ks['inline_keyboard'][] =  [['text'=>"$d",'callback_data'=>"inford_$co"],['text'=>'🗑','callback_data'=>"delrd_$co"]];
    }
    $Ks['inline_keyboard'][] =  [['text'=>'اضافه رد جديد','callback_data'=>"addrd"],['text'=>'الردود : '. $rdod['stat'],'callback_data'=>"rdod_stat"]];
    $Ks['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"paneel"]];

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الردود 👮‍♀️

- يمكنك اضافه ردود وحذفها 
- يمكنك استخدام الاوامر (اضف رد-مسح رد) 
        
- اضغط على نص الزر لعرض محتواه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Ks)
    ]);
    unset($modes[$from_id]);
    unset($modes['rd'][$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
    die();
}

if($text == "مشاهدة الازرار" or $text == 'مشاهده الازرار'){
foreach ($update->message->reply_to_message->reply_markup->inline_keyboard as $row) {
    foreach ($row as $button) {
        if (isset($button->text)) {
            $r = $button->text;
            $dat = $button->callback_data;
            $dat = "`HAX1:". base64_encode($dat)."`";
            $tm = $tm ."\n *$r* -> $dat";
        }
    }
}

    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "".$tm."\n\n الكودات الخاصه بالزرار ✅",
        'parse_mode' => 'markdown',
                    'reply_to_message_id' => $message_id,
    
    ]);
    die();
}
if($data == "addrd"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل الكلمة الان .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"rdod"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == "addrd"){
bot("sendmessage",[
    'chat_id' => $chat_id,
    'text' => "
• ارسل الرد الان 

- يمكنك وضع بعض الاضافات الى الرد من خلال استخدام الاهاشتاكات التاليه :
[
1. #id : لوضع ايدي الشخص 
2. #username : لوضع اسم مستخدم الشخص مع اضافه @ 
3. #name : لوضع اسم الشخص
]
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"rdod"]],
	]
	])
]);
$modes[$from_id] = "rd2";
$modes['rd'][$from_id] = "$text";
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($text and $modes[$from_id] == "rd2"){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
- تم حفط الرد بنجاح
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'اضافه رد جديد','callback_data'=>"addrd"]],
            [['text'=>'رجوع','callback_data'=>"rdod"]],
        ]
        ])
    ]);
$rdod["setting"][$modes['rd'][$from_id]]["STOP"] = "✅";
$rdod["setting"][$modes['rd'][$from_id]]["preg"] = "❌";
$rdod["msg"][] = $modes['rd'][$from_id];
$rdod['reply'][$modes['rd'][$from_id]] = $text;
file_put_contents("$rdod_name",json_encode($rdod));
unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}


$id = $update->inline_query->from->id; 
$rr = rand(0,99999999);

$k[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
$k1[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"back1"]];

	

    

    
$task_ex = explode("izr_sock_",$data)[1];
if($task_ex){
    $Y = $izr_sock[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $izr_sock[$task_ex] = $t;
    file_put_contents("$izr_name",json_encode($izr_sock));
    $key=[];
    $key[inline_keyboard][]=[['text'=>"الخدمات 🗂️",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"⚡️تمويل قناتك 👥",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"تجميع نقاط 💎",'callback_data'=>"HAX1"], ['text'=>"الحساب 🗃️",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"استخدام كود 🔖",'callback_data'=>"HAX1"], ['text'=>"تحويل $name3mla 🔄",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"معلومات الطلب 🔎",'callback_data'=>"HAX1"],['text'=>"طلباتي 🔇",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"التحديثات  ⚙️",'callback_data'=>"HAX1"],['text'=>"الاحصائيات 📊",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"شحن $name3mla ‍💎",'callback_data'=>"HAX1"],['text'=>"الشروط 📮",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"عدد الطلبات : $bot_tlb 👁️‍🗨️",'callback_data'=>"HAX1"]];
    $addedIds = [];

    foreach ($zr['id'] as $i) {
        $name = $zr['infonam'][$i];
        $biozr = $zr['infodesc'][$i];

        if (preg_match("#http#", $biozr)) {
            $editButton = ['text' => "$name", 'callback_data' => "edit:$i"];
            $deleteButton = ['text' => "🗑️", 'callback_data' => "del:$i"];

            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [$editButton, $deleteButton];
                $addedIds[] = $i;
            }
        } else {
            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edit:$i"]];
                $addedIds[] = $i;
            }
        }
    }

    $key['inline_keyboard'][] = [['text' => "+", 'callback_data' => "newzr"]];
    $key['inline_keyboard'][] =  [['text' => "تعديل ألأزرار", 'callback_data' => "azrarsb"],['text' => "الأزرار ألاساسيه : ".$izr_sock['mode']."", 'callback_data' => "izr_sock_mode"]];
    $key['inline_keyboard'][] = [['text' => 'رجوع', 'callback_data' => "paneel"]];

    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*• مرحبا بك في قسم الازرار الشفافة ✨*

- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode(['inline_keyboard' => $key['inline_keyboard']])
    ]);

    $zr['modemr'] = null;
    $zr['mode'] = null;
    $zr = json_encode($zr, true);
    file_put_contents("FCZR/" . X_ . "/zr.json", $zr);

}
    

if ($data == "azrars") {
    $key=[];
    $key[inline_keyboard][]=[['text'=>"الخدمات 🗂️",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"⚡️تمويل قناتك 👥",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"تجميع نقاط 💎",'callback_data'=>"HAX1"], ['text'=>"الحساب 🗃️",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"استخدام كود 🔖",'callback_data'=>"HAX1"], ['text'=>"تحويل $name3mla 🔄",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"معلومات الطلب 🔎",'callback_data'=>"HAX1"],['text'=>"طلباتي 🔇",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"التحديثات  ⚙️",'callback_data'=>"HAX1"],['text'=>"الاحصائيات 📊",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"شحن $name3mla ‍💎",'callback_data'=>"HAX1"],['text'=>"الشروط 📮",'callback_data'=>"HAX1"]];
    $key[inline_keyboard][]=[['text'=>"عدد الطلبات : $bot_tlb 👁️‍🗨️",'callback_data'=>"HAX1"]];
    $addedIds = [];

    foreach ($zr['id'] as $i) {
        $name = $zr['infonam'][$i];
        $biozr = $zr['infodesc'][$i];

        if (preg_match("#http#", $biozr)) {
            $editButton = ['text' => "$name", 'callback_data' => "edit:$i"];
            $deleteButton = ['text' => "🗑️", 'callback_data' => "del:$i"];

            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [$editButton, $deleteButton];
                $addedIds[] = $i;
            }
        } else {
            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edit:$i"]];
                $addedIds[] = $i;
            }
        }
    }

    $key['inline_keyboard'][] = [['text' => "+", 'callback_data' => "newzr"]];
     $key['inline_keyboard'][] =  [['text' => "تعديل ألأزرار", 'callback_data' => "azrarsb"],['text' => "الأزرار ألاساسيه : ".$izr_sock['mode']."", 'callback_data' => "izr_sock_mode"]];
    $key['inline_keyboard'][] = [['text' => 'رجوع', 'callback_data' => "paneel"]];

    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*• مرحبا بك في قسم الازرار الشفافة ✨*

- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode(['inline_keyboard' => $key['inline_keyboard']])
    ]);

    $zr['modemr'] = null;
    $zr['mode'] = null;
    $zr = json_encode($zr, true);
    file_put_contents("FCZR/" . X_ . "/zr.json", $zr);
}




    if($text == "admin" ){
    $key=[];
    foreach ($zr['id'] as $i){
    
     
        $biozr = $zr['infodesc'][$i];
    $name = $zr['infonam'][$i];
    if(preg_match("#http#",$biozr)) {
    	
    $key[inline_keyboard][]=[[text=>"$name",url=>"edit:$i" ], [text=>"🗑️",callback_data=>"del:$i" ]] ;
   } else {
   	
   $key[inline_keyboard][]=[[text=>"$name",callback_data=>"edit:$i" ]];
  } 
}

$key[inline_keyboard][]=[[text=>"+",callback_data=>"newzr"]];
$key['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"paneel"]];
bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
        'text' => "*• مرحبا بك في قسم الازرار الشفافة ✨*

- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup'=>json_encode($key)
    ]);
    unset($zr['mode']);
    
    $zr = json_encode($zr,true);
    file_put_contents("FCZR/". X_. "/zr.json",$zr);
    }

        
    $rr = explode(':',$data);
    if($rr[0] == 'del_g'){
        $bas = $rr[1];
        unset($zr['editsd'][$bas]);
        unset($zr['orignal'][$bas]);
        unset($zr['id_edits'][$bas]);
        $zr['modemr'] = null;
        $zr['mode'] = null;

        $zr = json_encode($zr, true);
        file_put_contents("FCZR/" . X_ . "/zr.json", $zr);

          $key = [];
    $addedIds = []; // Initialize addedIds array

    $zr = json_decode(file_get_contents("FCZR/" . X_ . "/zr.json"),1);
    foreach (json_decode(file_get_contents("FCZR/" . X_ . "/zr.json"),1)['id_edits'] as $i) {
        $name = $zr['orignal'][$i];

        // Replace 'true' with your actual condition
        if ($name) {
            $editButton = ['text' => "$name", 'callback_data' => "edi_g:$i"];
            $deleteButton = ['text' => "🗑️", 'callback_data' => "del_g:$i"];

            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [$editButton, $deleteButton];
                $addedIds[] = $i;
            }
        } else {
            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edit:$i"]];
                $addedIds[] = $i;
            }
        }
    }

    $key['inline_keyboard'][] = [['text' => "تعديل زر جديد", 'callback_data' => "newzredit"]];
    $key['inline_keyboard'][] = [['text' => "قسم ألأزرار الشفافه", 'callback_data' => "azrars"]];
    $key['inline_keyboard'][] = [['text' => 'رجوع', 'callback_data' => "paneel"]];

    // Assuming that you have a function named 'bot' for sending messages
    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*
        • مرحبا بك في قسم تعديل ازرار البوت 👋🏼

        - يمكنك اضافه تعديلات للازرار وحذفها 
        - اضغط على نص الزر لعرض التعديل الذي اصبح عليه الزر .
        *
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => true,
        'disable_notification' => false,
        'reply_markup' => json_encode(['inline_keyboard' => $key['inline_keyboard']])
    ]);

    }
    
if ($data == "azrarsb" or $data == "soon_") {
    $key = [];
    $addedIds = []; // Initialize addedIds array

    foreach ($zr['id_edits'] as $i) {
        $name = $zr['orignal'][$i];

        // Replace 'true' with your actual condition
        if ($name) {
            $editButton = ['text' => "$name", 'callback_data' => "edi_g:$i"];
            $deleteButton = ['text' => "🗑️", 'callback_data' => "del_g:$i"];

            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [$editButton, $deleteButton];
                $addedIds[] = $i;
            }
        } else {
            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edit:$i"]];
                $addedIds[] = $i;
            }
        }
    }

    $key['inline_keyboard'][] = [['text' => "تعديل زر جديد", 'callback_data' => "newzredit"]];
    $key['inline_keyboard'][] = [['text' => "قسم ألأزرار الشفافه", 'callback_data' => "azrars"]];
    $key['inline_keyboard'][] = [['text' => 'رجوع', 'callback_data' => "paneel"]];

    // Assuming that you have a function named 'bot' for sending messages
    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*
        • مرحبا بك في قسم تعديل ازرار البوت 👋🏼

        - يمكنك اضافه تعديلات للازرار وحذفها 
        - اضغط على نص الزر لعرض التعديل الذي اصبح عليه الزر .
        *
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => true,
        'disable_notification' => false,
        'reply_markup' => json_encode(['inline_keyboard' => $key['inline_keyboard']])
    ]);

    $zr['modemr'] = null;
    $zr['mode'] = null;
    $zr = json_encode($zr, true);
    file_put_contents("FCZR/" . X_ . "/zr.json", $zr);

    unset($modes[$from_id]);
    file_put_contents("$mode_name", json_encode($modes));
    die();
}

if ($data == 'newzredit') {
    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*
        • ارسل الان اسم الزر المراد تعديله
        - عليك كتابه اسم الزر بشكل صحيح ...!
        *
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "soon_"]],
            ]
        ])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name", json_encode($modes));
    die();
}

if ($text and $modes[$from_id] == 'newzredit') {
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
        • ارسل الان النص الذي تريد كتابته بدل *'" . $text . "' .
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "soon_"]],
            ]
        ])
    ]);
    $modes['helper'][$from_id] = $text;
    $modes[$from_id] = "axs2";
    file_put_contents("$mode_name", json_encode($modes));
    die();
}

if ($text and $modes[$from_id] == 'axs2') {
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
        • تم الحفظ .
        *
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "soon_"]],
            ]
        ])
    ]);

    $hardId = uniqid();

    $zr['id_edits'][] = $hardId;
    $zr['editsd'][$hardId] = $text;
    $zr['orignal'][$hardId] = $modes['helper'][$from_id];
    $zr = json_encode($zr, true);
    file_put_contents("FCZR/" . X_ . "/zr.json", $zr);

    unset($modes['helper'][$from_id]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name", json_encode($modes));
    die();
}

    

    
    if($data == "newzr"){
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"• ارسل اسم الزر الراد اضافته",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($k)
	]);
	$zr['mode'] = "newzr";
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	
	if($text and $zr['mode'] == "newzr"){
	bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
        • ارسل الان المحتوى المراد اضافته الى الزر 
*
- يمكنك ارسال كليشة نصية (يمكنك استخدام الماركداون)
- يمكنك ارسال رابط مباشر يبدء (https://....) لكي يصبح الزر يحتوي على رابط


        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup'=>json_encode($k)
    ]);
bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "
• يمكنك استخدام الازرار الاساسية في عمل الزر الجديد 

- لكي تحصل على كود الازرار ارسل '`مشاهدة الازرار`' بالرد على اي كليشة تحتوي على ازرار
    ",
    'parse_mode' => "MARKDOWN",
    'disable_web_page_preview' => "true",
    'disable_notification' => false,
    'reply_markup'=>json_encode($k)
]);
    $zr['mode'] = "add2";
    $zr['namezr'] = $text;
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
    }
    
    
    if($text and $zr['mode'] == "add2"){
    	if(preg_match("/HAX1:/",$text)){
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "*
        • تم حفظ الزر (زر مختصر)
        
        - مسار الزر : home
        *
                ",
                'parse_mode' => "MARKDOWN",
                'disable_web_page_preview' => "true",
                'disable_notification' => false,
                'reply_markup'=>json_encode($k)
            ]);
            $rr = explode("HAX1:",$text)[1];
            $rr = base64_decode($rr);
            $zr['id'][] = $rr; 
            $zr['is_i'][$rr] = true; 
            $zr['infonam'][$rr] = $zr['namezr'];
            $zr['infodesc'][$rr] = $text;
            $zr['infosect'][$rr] = "edit";
            
            $zr['mode'] = null;
            $zr['namezr'] = null;
            
        $zr = json_encode($zr,true);
        file_put_contents("FCZR/". X_. "/zr.json",$zr);
            die();
        }
	bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
• تم حفظ الزر (محتوى نصي)

- مسار الزر : home
*
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup'=>json_encode($k)
    ]);
    $zr['id'][] = $rr; 
    $zr['infonam'][$rr] = $zr['namezr'];
    $zr['infodesc'][$rr] = $text;
    $zr['infosect'][$rr] = "edit";
    
    $zr['mode'] = null;
    $zr['namezr'] = null;
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
    }
    
    $u = explode(":",$data);
	if(explode(":",$data)[0] == "del"){
    if($zr['infonam'][explode(":",$data)[1]]){
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- تم مسح الزر
",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($k)
	]);
	$zr['infonam'][$u[1]] = null;
    $zr['infodesc'][$u[1]] = null;
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	}
	
	if(explode(":",$data)[0] == "edit"){
    if($zr['infonam'][explode(":",$data)[1]]){
    	$id = explode(":",$data)[1];
    
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    
    if($zr['infosect'][explode(":",$data)[1]] == "edit"){
    	$sect = "تعديل رساله";
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "send"){
    	$sect = "تعديل رساله";
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "hmsa"){
    	$sect = "همسة";
    }
    
    if(preg_match("#http#",$biozr)) {
    	$tp = "رابط ( $biozr) " ;
   } elseif(preg_match("/HAX1:/",$text)){
    $tp = "زر مختصر";
}else {
   	$tp = "محتوى نصي" ;
  } 
  $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• طريقه عرض الرساله : $sect •",callback_data=>"sect:$id"]];
    	$h[inline_keyboard][]=[[text=>"• مسح الزر •",callback_data=>"del:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- نوع الزر : $tp


`$biozr`

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	
	}
	}
	
	if(explode(":",$data)[0] == "sect"){
    if($zr['infonam'][explode(":",$data)[1]]){
    	
    if($zr['infosect'][explode(":",$data)[1]] == "edit"){
    	$sect = "تعديل رساله";
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "send"){
    	$sect = "تعديل رساله";
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "hmsa"){
    	$sect = "همسة";
    }
    	$id = explode(":",$data)[1];
    $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• تعديل رسالة •",callback_data=>"editss:$id"]];
    	$h[inline_keyboard][]=[[text=>"• رساله جديده •",callback_data=>"sendss:$id"]];
    $h[inline_keyboard][]=[[text=>"• همسة •",callback_data=>"hmsass:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- طريقه عرض الزر : $sect

اختر من الازرار لتغيي نوع العرض

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	
	$zr['modemr']= null ;
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	}
	
	
	
	if(explode(":",$data)[0] == "editss"){
		
    	$id = explode(":",$data)[1];
    $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• تعديل رسالة •",callback_data=>"editss:$id"]];
    	$h[inline_keyboard][]=[[text=>"• رساله جديده •",callback_data=>"sendss:$id"]];
    $h[inline_keyboard][]=[[text=>"• همسة •",callback_data=>"hmsass:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- طريقه عرض الزر : تعديل رساله

اختر من الازرار لتغيي نوع العرض

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	$zr['infosect'][$id] = "edit";
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	
	if(explode(":",$data)[0] == "setmhtea"){
		
    	$id = explode(":",$data)[1];
   
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"edit:$id"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    $htwa = $zr['infodesc'][$id] ;
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- محتوي الداخل الزر :
$htwa

- ارسل الان المحتوي الجديد داخل الزر
",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	$zr['modemr']= "setmhtea";
	$zr['idzr']= "$id";
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	
	if($text and $zr['modemr']== "setmhtea") {
		$id = $zr['idzr'] ;
		bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
• تم حفظ محتوي الزر ✅

- مسار الزر : home
*
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup'=>json_encode($k)
    ]);
    $zr['infodesc'][$id] = $text;
    $zr['idzr'] = null ;
    $zr['modemr']= null ;
    $zr['mode']= null ;
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
		} 
	
	if(explode(":",$data)[0] == "sendss"){
		
    	$id = explode(":",$data)[1];
    $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• تعديل رسالة •",callback_data=>"editss:$id"]];
    	$h[inline_keyboard][]=[[text=>"• رساله جديده •",callback_data=>"sendss:$id"]];
    $h[inline_keyboard][]=[[text=>"• همسة •",callback_data=>"hmsass:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- طريقه عرض الزر : رساله جديده

اختر من الازرار لتغيي نوع العرض

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	$zr['infosect'][$id] = "send";
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	
	if(explode(":",$data)[0] == "hmsass"){
		
    	$id = explode(":",$data)[1];
    $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• تعديل رسالة •",callback_data=>"editss:$id"]];
    	$h[inline_keyboard][]=[[text=>"• رساله جديده •",callback_data=>"sendss:$id"]];
    $h[inline_keyboard][]=[[text=>"• همسة •",callback_data=>"hmsass:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- طريقه عرض الزر : همسة

اختر من الازرار لتغيي نوع العرض

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	$zr['infosect'][$id] = "hmsa";
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
    
    
	

if($data == "frdrs"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم توجيه جميع الرسائل التي يتم ارسالها الى البوت 🚸

- يمكنك (تفعيل-تعطيل) توجيه الرسائل من المستخدمين 
- يمكنك (تفعيل-تعطيل) خاصيه مسح الرد الذي قام بالرد به البوت وابقاء الرد الخاص بك 
- يمكنك (تفعيل-تعطيل) شمول بقيه الادمنية بتوجيه الرسائل لهم
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'توجيه الرسائل : ' . $fords['del'],'callback_data'=>"fords_del"],['text'=>'مسح الرد تلقائيا : '. $fords['autodel'] ,'callback_data'=>"fords_autodel"]],
        [['text'=>'توجيه الرسائل الي بقيه المطورين : ' . $fords['toother'],'callback_data'=>"fords_toother"]],
        [['text'=>'رد علي الرسائل : ' . $fords['reply'],'callback_data'=>"fords_reply"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
}

if($data == "setstop"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
[
• ارسل الرساله التي سوف تضهر عند ايقاف البوت .

- يمكنك وضع بعض الاضافات الى الرساله من خلال استخدام الاهاشتاكات التاليه :
        
1. #name_user : لوضع اسم شخص ووضع معرفه داخل اسمه 
2. #username : لوضع اسم مستخدم الشخص مع اضافه @ 
3. #name : لوضع اسم الشخص
4. #id : لوضع ايدي الشخص
        ]
يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .

    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"botstat"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == "setstop"){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
        • مثال على الرساله : 

        $text
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    ]);
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
        • تم الحفظ بنجاح
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[
                [['text'=>'رجوع','callback_data'=>"botstat"]],
            ]
            ])
    ]);
    $bot_enter["stoper"] = $text;
    file_put_contents("$ent_name",json_encode($bot_enter));
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}

if($data == "botstat"){

    if($bot_enter["link"] == null){
$length = 40;
$cod_star = bin2hex(random_bytes($length / 2));
$bot_enter["link"] = $cod_star;
file_put_contents("$ent_name",json_encode($bot_enter));
    }else{
        $cod_star = $bot_enter["link"];
    }

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم عمل البوت 🥷🏾

- رابط الدخول الى البوت : 
[https://t.me/". X_ ."?start=$cod_star]
        
- يمكنك استخدام رابط الدخول الى البوت عند ايقاف عمل البوت
        
• عدد الاعضاء الكلي الذين دخلوا لرابط الدخول الى البوت : $count_eners
• عدد الضغطات للرابط : *". $count_ecw ."*
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'حاله عمل البوت : '. $bot_enter['bot'],'callback_data'=>"enters_bot"]],
            [['text'=>'تعيين رساله التي تضهر عند ايقاف البوت','callback_data'=>"setstop"]],
            [['text'=>'تغير رابط الدخول للبوت','callback_data'=>"change_url"]],
            [['text'=>'مسح جميع الاعضاء الي دخلوا لرابط الدخول','callback_data'=>"deltene"]],
            [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
    ]);
}

if($data  == "deltene"){
    $code = $bot_enter["link"];
    bot('answerCallbackQuery',[ 
        'callback_query_id'=>$update->callback_query->id, 
        'text'=>"
        • تم مسح الاعضاء الي دخلو لرابط الدخول 
", 
        'show_alert'=>false
        ]); 
        unset($enters["mems"][$code]);
        file_put_contents("$entars_name",json_encode($enters));
        bot("editmessagetext",[
            'chat_id' => $chat_id,
            "message_id"=>$message_id,
            'text' => "
• مرحبا بك في قسم عمل البوت 🥷🏾
    
- رابط الدخول الى البوت : 
[https://t.me/". X_ ."?start=$code]
            
- يمكنك استخدام رابط الدخول الى البوت عند ايقاف عمل البوت
            
• عدد الاعضاء الكلي الذين دخلوا لرابط الدخول الى البوت : *0*
• عدد الضغطات للرابط : *". $count_ecw ."*
            ",
            'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
            
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[
                [['text'=>'حاله عمل البوت : '. $bot_enter['bot'],'callback_data'=>"enters_bot"]],
                [['text'=>'تعيين رساله التي تضهر عند ايقاف البوت','callback_data'=>"setstop"]],
                [['text'=>'تغير رابط الدخول للبوت','callback_data'=>"change_url"]],
                [['text'=>'مسح جميع الاعضاء الي دخلوا لرابط الدخول','callback_data'=>"deltene"]],
                [['text'=>'رجوع','callback_data'=>"paneel"]],
            ]
            ])
        ]);
}

if($data == 'change_url'){
    bot('answerCallbackQuery',[ 
        'callback_query_id'=>$update->callback_query->id, 
        'text'=>"
        • تم تغيير رابط الدخول
", 
        'show_alert'=>false
        ]); 
        $length = 40;
        $cod_star = bin2hex(random_bytes($length / 2));
        $bot_enter["link"] = $cod_star;
        file_put_contents("$ent_name",json_encode($bot_enter));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم عمل البوت 🥷🏾

- رابط الدخول الى البوت : 
[https://t.me/". X_ ."?start=$cod_star]
        
- يمكنك استخدام رابط الدخول الى البوت عند ايقاف عمل البوت
        
• عدد الاعضاء الكلي الذين دخلوا لرابط الدخول الى البوت : $count_eners
• عدد الضغطات للرابط : *". $count_ecw ."*
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'حاله عمل البوت : '. $bot_enter['bot'],'callback_data'=>"enters_bot"]],
            [['text'=>'تعيين رساله التي تضهر عند ايقاف البوت','callback_data'=>"setstop"]],
            [['text'=>'تغير رابط الدخول للبوت','callback_data'=>"change_url"]],
            [['text'=>'مسح جميع الاعضاء الي دخلوا لرابط الدخول','callback_data'=>"deltene"]],
            [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
    ]);
}

$task_ex = explode("enters_",$data)[1];
if($task_ex){

    if($bot_enter["link"] == null){
        $length = 40;
        $cod_star = bin2hex(random_bytes($length / 2));
        $bot_enter["link"] = $cod_star;
        file_put_contents("$ent_name",json_encode($bot_enter));
            }else{
                $cod_star = $bot_enter["link"];
            }

    $Y = $bot_enter[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $bot_enter[$task_ex] = $t;
    file_put_contents("$ent_name",json_encode($bot_enter));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم عمل البوت 🥷🏾

- رابط الدخول الى البوت : 
[https://t.me/". X_ ."?start=$cod_star]
        
- يمكنك استخدام رابط الدخول الى البوت عند ايقاف عمل البوت
        
• عدد الاعضاء الكلي الذين دخلوا لرابط الدخول الى البوت : $count_eners
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'حاله عمل البوت : '. $bot_enter['bot'],'callback_data'=>"enters_bot"]],
            [['text'=>'تعيين رساله التي تضهر عند ايقاف البوت','callback_data'=>"setstop"]],
            [['text'=>'تغير رابط الدخول للبوت','callback_data'=>"change_url"]],
            [['text'=>'مسح جميع الاعضاء الي دخلوا لرابط الدخول','callback_data'=>"deltene"]],
            [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
    ]);
}


$task_ex = explode("rdod_",$data)[1];
if($task_ex){
    $Y = $rdod[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $rdod[$task_ex] = $t;
    file_put_contents("$rdod_name",json_encode($rdod));
    $Ks = ['inline_keyboard' => []];
    foreach($rdod['msg'] as $d){
        $co = array_search($d,$rdod['msg']);

    $Ks['inline_keyboard'][] =  [['text'=>"$d",'callback_data'=>"inford_$co"],['text'=>'🗑','callback_data'=>"delrd_$co"]];
    }
    $Ks['inline_keyboard'][] =  [['text'=>'اضافه رد جديد','callback_data'=>"addrd"],['text'=>'الردود : '. $rdod['stat'],'callback_data'=>"rdod_stat"]];
    $Ks['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"paneel"]];
    

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الردود 👮‍♀️

- يمكنك اضافه ردود وحذفها 
- يمكنك استخدام الاوامر (اضف رد-مسح رد) 
        
- اضغط على نص الزر لعرض محتواه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Ks)
    ]);
}

$task_ex = explode("start_sock_",$data)[1];
if($task_ex){
    $Y = $start_sock[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $start_sock[$task_ex] = $t;
    file_put_contents("$start_name",json_encode($start_sock));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        "message_id"=>$message_id,
        'text' => "*
• مرحبا بك في قسم رساله الترحيب (/start) 🌾
- ستظهر هذه الرساله عند ارسال (/start) الى البوت الخاص بك 
*
- ارساله الحاليه :

`$start_msg`
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الازرار الشفافه','callback_data'=>"azrars"]],
        [['text'=>'الاختصارات','callback_data'=>"xtsars"]],
         [['text'=>'تعيين الرساله','callback_data'=>"set_start"],['text'=>'مسح الرساله' ,'callback_data'=>"del_start"]],
        [['text'=>'رد علي الرسائل : ' . $start_sock["mode"],'callback_data'=>"start_sock_mode"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);

}

$task_ex = explode("fords_",$data)[1];
if($task_ex){
    $Y = $fords[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $fords[$task_ex] = $t;
    file_put_contents("$fords_name",json_encode($fords));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم توجيه جميع الرسائل التي يتم ارسالها الى البوت 🚸

- يمكنك (تفعيل-تعطيل) توجيه الرسائل من المستخدمين 
- يمكنك (تفعيل-تعطيل) خاصيه مسح الرد الذي قام بالرد به البوت وابقاء الرد الخاص بك 
- يمكنك (تفعيل-تعطيل) شمول بقيه الادمنية بتوجيه الرسائل لهم
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'توجيه الرسائل : ' . $fords['del'],'callback_data'=>"fords_del"],['text'=>'مسح الرد تلقائيا : '. $fords['autodel'] ,'callback_data'=>"fords_autodel"]],
        [['text'=>'توجيه الرسائل الي بقيه المطورين : ' . $fords['toother'],'callback_data'=>"fords_toother"]],
        [['text'=>'رد علي الرسائل : ' . $fords['reply'],'callback_data'=>"fords_reply"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);

}


$task_ex = explode("tasks_",$data)[1];
if($task_ex){
    $Y = $tasks[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $tasks[$task_ex] = $t;
    file_put_contents("$task_name",json_encode($tasks));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
    • اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖
    
    - يمكنك التحكم في البوت الخاص بك من هنا
    ~~~~~~~~~~~~~~~~~
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[

		[['text'=>' 🛍','callback_data'=>"Brook"]],
        ]
        ])
    ]);
}

}


if($chat_id != IDBot or $from_id != IDBot){

$d = date('D');
mkdir('onliner');
$day = explode("\n",file_get_contents("onliner/".USR_BOT."/".$d.".txt"));
if($d == "Sat"){
unlink("onliner/Fri.txt");
}
if($d == "Sun"){
unlink("onliner/Sat.txt");
}
if($d == "Mon"){
unlink("onliner/Sun.txt");
}
if($d == "Tue"){
unlink("onliner/Mon.txt");
}
if($d == "Wed"){
unlink("onliner/The.txt");
}
if($d == "Thu"){
unlink("onliner/Wed.txt");
}
if($d == "Fri"){
unlink("onliner/Thu.txt");
}

if(!in_array($from_id, $day)){
    file_put_contents("onliner/".USR_BOT."/".$d.".txt",$from_id."\n",FILE_APPEND);
}

$user_me = $update->message->from->username;

if ($user_me === null) {
    $user_me = "لايوجد";
} else {
    $user_me = "@$user_me";
}

$member_get = explode("\n", file_get_contents($member_name));

if (!in_array($from_id, $member_get)) {
    file_put_contents($member_name, $from_id . "\n", FILE_APPEND);
    if ($tasks['notife'] === '✅' && $from_id !== $admin && !in_array($from_id, $admins)) {
        $priv = getCountFromFile("$member_name");

        bot('sendMessage', [
            'chat_id' => $admin,
            'text' => "
٭ تم دخول شخص جديد الى البوت الخاص بك 👾
-----------------------
• معلومات العضو الجديد .

• الاسم : [$name](tg://user?id=$from_id)
• المعرف : [$user_me]
• الايدي : `$from_id`
-----------------------
• عدد الاعضاء الكلي : $priv
",
            'parse_mode' => 'markdown',
        ]);
    }
}

$chanel_get = explode('\n', file_get_contents("$chanel_name"));
$group_get = explode('\n', file_get_contents("$group_name"));
if($update->my_chat_member->chat->id){
    if($update->my_chat_member->chat->type == 'channel'){
if (!in_array($update->my_chat_member->chat->id, $chanel_get)) {
    file_put_contents("$chanel_name", file_get_contents($chanel_name) . "\n".$update->my_chat_member->chat->id);

}
}else{
    if (!in_array($update->my_chat_member->chat->id, $group_get)) {
        file_put_contents("$group_name", file_get_contents($group_name) . "\n".$update->my_chat_member->chat->id);
    
    }
}
}

if($blockers[$from_id] == true or $blockers[$user] == true or $blockers[$user_me] == true){
die();
}

if($from_id != $admin){
    if(!in_array($from_id,$admins)){
$ch_shtrak =  $shtrak['CHANNEL_ASAS'];
if($ch_shtrak != null){
    if($shtrak["start"] == '✅'){
        $b = "text";
        $t = "/start";
    }else{
        $b = "message";
    }
if($GLOBALS[$b] or $GLOBALS[$b] == $t){
if(preg_match("/@/",$ch_shtrak)){
    $ch_shtrak = $ch_shtrak;
    $lnker = "https://t.me/". str_replace("@","",$ch_shtrak);
}elseif(preg_match("/-/",$ch_shtrak)){
    if($shtrak['linker'][$ch_shtrak] == null){
    $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
    $lnker = $ch_shtrak;
    $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
    file_put_contents("$shtrak_name",json_encode($shtrak));
    }else{
        $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        $lnker = $ch_shtrak;
    }
}else{
    $ch_shtrak = "لايوجد";
}

$msg_shtrak = $shtrak['MSG_CHANNEL_ASAS'];
if($msg_shtrak == null){
    $msg_shtrak = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه
    
- $ch_shtrak
    
 ثم اضغط /start 🔹 
    ";
}

if($shtrak["inline"] == "✅"){
$getch2 = json_decode(file_get_contents("http://" . $config['api_url'] . "/bot".API_KEY."/getChat?chat_id=".$shtrak['CHANNEL_ASAS']))->result;
$name_ch = $getch2->title;
}

$join = file_get_contents("https://" . $config['api_url'] . "/bot".API_KEY."/getChatMember?chat_id=".$shtrak['CHANNEL_ASAS']."&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
    if($shtrak["check"] == "✅"){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"
- - - - - - - - 
            ",
            'reply_to_message_id'=>$message->message_id,
            'reply_markup'=>json_encode([
                'keyboard'=>[
                    [['text'=>"تحقق من الاشتراك"]]
                  ],
                  'resize_keyboard'=>true])
            ]);
    }
    if($shtrak["markdown"] == "✅"){
        $ma = "Markdown";
        $rk = "parse_mode";
    }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"

$msg_shtrak

",
$rk => $ma,
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$name_ch" ,'url'=>"$lnker"]],
]])
]);
if($shtrak["notife"] == '✅'){
$modes[$from_id] = "to_";
file_put_contents("$mode_name",json_encode($modes));
}
die();
}
}
}

if($shtrak["notife"] == '✅'){
    if($modes[$from_id] == "to_"){
$ch_shtrak =  $shtrak['CHANNEL_ASAS'];
if(preg_match("/@/",$ch_shtrak)){
    $ch_shtrak = $ch_shtrak;
    $lnker = "https://t.me/". str_replace("@","",$ch_shtrak);
}elseif(preg_match("/-/",$ch_shtrak)){
    if($shtrak['linker'][$ch_shtrak] == null){
    $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
    $lnker = $ch_shtrak;
    $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
    file_put_contents("$shtrak_name",json_encode($shtrak));
    }else{
        $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        $lnker = $ch_shtrak;
    }
}else{
    $ch_shtrak = "لايوجد";
}
        unset($modes[$from_id]);
        $modes['count'][$ch_shtrak] += 1;
file_put_contents("$mode_name",json_encode($modes));

bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"
📥| شترك شخص جديد في قناة الاشتراك الاجباري

- القناة : [".$ch_shtrak."]
    
- العضو : [$name](tg://user?id=$from_id)
- ايدي العضو: `$from_id`

- عدد المشتركين بالقناة : ". $modes['count'][$ch_shtrak] ?? "0" ."
    
",
"parse_mode"=>"MarkDown",         

]);
    }
}

if($shtrak['CHANNELS']){
$Lr = ['inline_keyboard' => []];
foreach ($shtrak['CHANNELS'] as $chs){
    $u = array_search($chs , $shtrak['CHANNELS']);
    if($chs != "start"){
        $Lr['inline_keyboard'][] =  [['text'=>"$chs",'callback_data'=>"control_$u"],['text'=>'🗑','callback_data'=>"delch_$u"]];
        $join = file_get_contents("https://" . $config['api_url'] . "/bot".API_KEY."/getChatMember?chat_id=".$chs."&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
$Le = array_search($chs , $shtrak['CHANNELS']);
    $output = $chs;
if(preg_match("/-/",$output)){
$ch_shtrak = $output;
$getch2 = json_decode(file_get_contents("http://" . $config['api_url'] . "/bot".API_KEY."/getChat?chat_id=".$chs))->result;
$name_ch = $getch2->title;
    if(preg_match("/@/",$ch_shtrak)){
        $ch_shtrak = $ch_shtrak;
    }elseif(preg_match("/-/",$ch_shtrak)){
        if($shtrak['linker'][$chs] == null){
        $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$chs])->result;
        $shtrak['linker'][$chs] = $ch_shtrak;
        file_put_contents("$shtrak_name",json_encode($shtrak));
        }else{
            $ch_shtrak = $shtrak['linker'][$chs];
        }
    }else{
        $ch_shtrak = "لايوجد";
    }

}else{
    $ch_shtrak = $output;
}

$msg_sh = $shtrak["info"][$Le]['msg'];
if($msg_sh == null){
    $msg_sh = "
📫| عذراً، عليك الأشتراك في قناة 
البوت أولاً ‼️        
- $ch_shtrak
- أشترك ثم أضغط /start 🔹
    ";
}

$ineed = $shtrak["info"][$Le]['cc'];
$doneneed = $shtrak["info"][$Le]['doneneed'] ?? "0";
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
[
$msg_sh
]
",
"parse_mode" => "markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$shtrak["info"][$Le]['doneneed'] += 1;
file_put_contents("$shtrak_name",json_encode($shtrak));

if($ineed != null){
if($doneneed == $ineed){
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"
        *
- لقد شاهدو $ineed شخص الاشتراك الاجباري الخاص بك .
- القناة : *[$ch_shtrak] .
- وتم انتهاء التمويل بنجاح عزيزي الادمن .
*
- تم مسح القناة من الاجباري تلقائيا !!
*
        ",
        "parse_mode" => "markdown",
        ]);
unset($shtrak["info"][$Le]);
unset($shtrak['CHANNELS'][$Le]);
file_put_contents("$shtrak_name",json_encode($shtrak));
}
}

die();

    }
}

}
}

if($shtrak['socail']){
$sh_ms = $shtrak['socail']['link'];
if($sh_ms != null){

    if($helper[$sh_ms][$from_id]['count'] != 3){
$msg_whm = $shtrak['socail']['msg'];
if($msg_whm == null){
$msg_whm = "
🚸| عذرا عزيزي
🔰| عليك متابعه حسابي
    
- $sh_ms
    
‼️| تابعني من ثم ارسل /start
    
.

";
}  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
[
$msg_whm
]
",
"parse_mode"=>"MarkDown",         
]);
$helper[$sh_ms][$from_id]['count'] += 1;
file_put_contents("$helper_name",json_encode($helper));
die();
}
}
}

if($shtrak['bot']){
    $sh_ms = $shtrak['bot']['link'];
    if($sh_ms != null){
    
        if($helper['bot'][$sh_ms][$from_id]['count'] != 3){
    $msg_whm = $shtrak['bot']['msg'];
    if($msg_whm == null){
    $msg_whm = "
📫| عذراً، عليك الأشتراك في قناة 
البوت أولاً ‼️        
- $ch_shtrak
- أشترك ثم أضغط /start 🔹
    ";
    }  
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
    [
    $msg_whm
    ]
    ",
    "parse_mode"=>"MarkDown",         
    ]);
    $helper['bot'][$sh_ms][$from_id]['count'] += 1;
    file_put_contents("$helper_name",json_encode($helper));
    die();
    }
    }
    }
        }
    }
if($text == "تحقق من الاشتراك"){
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
- تم التحقق من الاشتراك ✅

- ارسل الان /start ♻️
",
"parse_mode"=>"MarkDown",         
'reply_markup'=>json_encode([
'remove_keyboard'=>true
])
]);
die();
}


if($rdod['stat'] == "✅"){
$keyword = $text;

if ($rdod) {
    foreach ($rdod["msg"] as $index => $msg) {
        if (strpos($msg, $keyword) !== false) {
            $r = $rdod["msg"][$index];
            $b = $rdod["setting"][$r]["preg"];
            if($b == "✅"){
                bot("sendmessage",[
                    'chat_id' => $chat_id,
                    'text' => "
            [".$rdod['reply'][$text]."]
                    ",
                    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
                    'reply_to_message_id' => $message_id,
                ]);
                die();
            }
        }
    }
}



if($rdod['reply'][$text]){
    if($rdod["setting"][$text]["STOP"] == "✅"){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
[".$rdod['reply'][$text]."]
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    ]);
    die();
}else{
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
[".$rdod['reply'][$text]."]
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        'reply_to_message_id' => $message_id,
    ]);
}
}

}
if($chat_id != $admin){
if($fords['del'] == "✅"){
    if(!$data){
    if($fords['reply'] == '❌'){
    bot('forwardMessage', [
        'chat_id'=>$admin,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message_id,
        ]);
    } else {
        bot('forwardMessage', [
            'chat_id'=>$admin,
            'from_chat_id'=>$chat_id,
            'message_id'=>$message_id,
            ]);
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
                ",
                'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
            ]);
    }
}
}
}

foreach ($xts["commands"] as $au){
    $a = explode(" - ",$au)[0];
    $r = explode(" - ",$au)[1];
    $Commands[] =  ['command'=>"$a",'description'=>"$r"];
}
bot('setMyCommands',[
'commands'=>json_encode($Commands)
]);

if($from_id != $admin && !in_array($from_id,$admins)){
    if($bot_enter['bot'] == "❌"){ 
        if(preg_match('/start/',$text)){
            $code = explode('/start ',$text)[1];
            if($code == $bot_enter["link"]){
           // bots 
            }else{
                if($code){
                    bot("sendmessage",[
                        'chat_id' => $chat_id,
                        'text' => "• كود دخول خاطء او منتهي صلاحيته .",
                        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
                    ]);
                }

                bot("sendmessage",[
                    'chat_id' => $chat_id,
                    'text' => "• البوت تحت الصيانه حاليا .",
                    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
                ]);
                die();
            }
        }else{
            die();
        }
    }
} else {

}

mkdir("FCZR/". X_) ;
$zr = json_decode(file_get_contents("FCZR/". X_ . "/zr.json"),true);


if(explode(":",$data)[0] == "enter"){
    if($zr['infonam'][explode(":",$data)[1]]){
    
    if($zr['infosect'][explode(":",$data)[1]] == "edit"){
    	$fic = "editmessagetext";
    
    
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "send"){
    	$fic = "sendMessage";
    
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "hmsa"){
    	$fic = "answerCallbackQuery";
    
    }
   
    
    
    
    
    
    $k15[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"tobot"]];
    bot($fic,[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>$zr['infodesc'][explode(":",$data)[1]],
    'parse_mode'=>"MARKDOWN",
    'callback_query_id'=>$update->callback_query->id,
    'reply_markup'=>json_encode($k15),
    'show_alert'=>true,
	]);
} 
	}
	
	$key=[];

    $key[inline_keyboard][]=[['text'=>"الخدمات 🗂️",'callback_data'=>"service"]];
    $key[inline_keyboard][]=[['text'=>"⚡️تمويل قناتك 👥",'callback_data'=>"tmoile"]];
    $key[inline_keyboard][]=[['text'=>"تجميع نقاط 💎",'callback_data'=>"plus"], ['text'=>"الحساب 🗃️",'callback_data'=>"acc"]];
    $key[inline_keyboard][]=[['text'=>"استخدام كود 🔖",'callback_data'=>"hdia"], ['text'=>"تحويل $name3mla 🔄",'callback_data'=>"transer"]];
    $key[inline_keyboard][]=[['text'=>"معلومات الطلب 🔎",'callback_data'=>"infotlb"],['text'=>"طلباتي 🔇",'callback_data'=>"myrders"]];
    $key[inline_keyboard][]=[['text'=>"التحديثات  ⚙️",'url'=>"$chabot.t.me"],['text'=>"الاحصائيات 📊",'callback_data'=>"Hax"]];
    $key[inline_keyboard][]=[['text'=>"شحن $name3mla ‍💎",'callback_data'=>"buy"],['text'=>"الشروط 📮",'callback_data'=>"termss"]];
    $key[inline_keyboard][]=[['text'=>"عدد الطلبات : $bot_tlb 👁️‍🗨️",'callback_data'=>"jj"]];
  $fuck = array(); 

  foreach ($zr['id'] as $i) {
      $name = $zr['infonam'][$i];
      $biozr = $zr['infodesc'][$i];
      $is_u = $zr['is_i'][$i];
  
      if (preg_match("#http#", $biozr)) {
          $key[inline_keyboard][] = [[text => "$name", url => $biozr]];
      } elseif ($is_u == true) {
          if (!isset($fuck[$i])) {
              $key[inline_keyboard][] = [[text => "$name", callback_data => "$i"]];
              $fuck[$i] = "o"; 
          }
      } else {
          if (!isset($fuck[$i])) {
              $key[inline_keyboard][] = [[text => "$name", callback_data => "enter:$i"]];
              $fuck[$i] = "o"; 
          }
      }
  }
  $ai = json_decode(file_get_contents("ai"),1);

  if($data == "tobot"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $start_msg,
        'parse_mode' => 'MaRKDOWN',
        "reply_markup" => json_encode($key),
    ]);
  }
  $user_me = $update->message->from->username;

if ($user_me === null) {
    $user_me = "لايوجد";
} else {
    $user_me = "@$user_me";
}

  $start_msg = str_replace(
	array(
		'#name_user',
		'#username',
		'#name',
		'#coins',
		'#tlbs',
		'#shares',
		'#xtlb',
        'نقاط',
		'#id'
	)
	,
	array(
		"[$name](tg://user?id=$from_id)",
		$user_me,
		$name,
		$rshq["coin"][$from_id]??"0",
		$rshq['bot_tlb'] ?? "0",
		$rshq["mshark"][$from_id] ?? "0",
		$rshq["tlby"][$from_id] ?? "0",
        $rshq["name3mla"] ?? "نقاط",
		$from_id
	)
	, $start_msg);



}