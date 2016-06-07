<?php

$MGCServerCmdID = array( 
  0 =>  "MGC_CID_SERVER_UNKNOWN",     //      = 0; // 未定义预留
  1 => "MGC_CID_SERVER_PARSE_PDU_FAIL",      //     = 1; // 逻辑服务器通知接入服务器，数据包解析出kkk错
  2 => "MGC_CID_SERVER_ACCESS_SERV_INFO",    //     = 2; // 接入服务器信息
  3 => "MGC_CID_SERVER_ONLINE_CONN_INFO",     //    = 3; // 接入服务器的连接数信息
  4 => "MGC_CID_SERVER_SERVER_REGISTER",     //     = 4; // 服务器向其他服务器注册自己的server_number
  5 => "MGC_CID_SERVER_USER_ONLINE",         //     = 5; // 用户上线
  6 => "MGC_CID_SERVER_USER_OFFLINE",        //     = 6; // 用户离线
  7 => "MGC_CID_SERVER_ONLINE_USERS_REQ",    //     = 7; // 在线用户信息请求，用于发送消息
  8 => "MGC_CID_SERVER_ONLINE_USERS_RESP",    //    = 8; // 1. 接入服务器重连到在线状态服务器后，汇报当前所有用户状态，用于重建状态服务器
  // 2. 在线用户信息请求恢复
  9  => "MGC_CID_SERVER_ONLINE_USERS_NOTIFY",   //= 9;
  11 => "MGC_CID_SERVER_STOP_SERVICE",          //   = 11; // 通知服务调用方服务即将停止
  12 => "MGC_CID_SERVER_MSG_ID_RESP",           //   = 12; // 写消息时返回消息ID
  13 => "MGC_CID_SERVER_USER_ACTION_LOG",       //   = 13; // 用户行为日志，登陆/登出/离开
  14 => "MGC_CID_SERVER_SENSITIVE_WORD_REQ",    //   = 14; // 获取敏感词请求
  15 => "MGC_CID_SERVER_SENSITIVE_WORD_RESP",    //  = 15; // 获取敏感词回复
  16 => "MGC_CID_SERVER_SERVICE_DISPATCH_LOG",   //  = 16; // 分配客服日志
  17 => "MGC_CID_SERVER_SERVICE_USER_REQ",       //  = 17; // 请求一个店铺的客服用户和默认离线分配客服信息
  18 => "MGC_CID_SERVER_SERVICE_USER_RESP",       // = 18;
  20 => "MGC_CID_SERVER_SYSTEM_USER_REQ",        //  = 20; // 请求系统推送用户列表
  21 => "MGC_CID_SERVER_SYSTEM_USER_RESP",       //  = 21;
  22 => "MGC_CID_SERVER_INSERT_SYS_MSG_REQ",     //  = 22; // 插入系统消息
  23 => "MGC_CID_SERVER_INSERT_SYS_MSG_RESP",    //  = 23;
  24 => "MGC_CID_SERVER_BROADCAST_SYS_MSG",     //   = 24; // 发送系统消息
  25 => "MGC_CID_SERVER_BATCH_MSG",             //   = 25; // 批量发消息
  26 => "MGC_CID_SERVER_BATCH_MSG_ID_RESP",     //  = 26; // 批量发消息返回批量消息ID
  27 => "MGC_CID_SERVER_USER_BADGE_REQ",         //  = 27; // 请求用户所有未读计数，包括群，消息，cinfo
  28 => "MGC_CID_SERVER_USER_BADGE_RESP",        //  = 28;
  29 => "MGC_CID_SERVER_IMG_BATCH_MSG",          //  = 29; // 批量发附带图片的消息 //add by wuhui 2015-07-23
  30 => "MGC_CID_SERVER_ONLINE_USER_CNT_REQ",     // = 30; // 用户在线人数请求
  31 => "MGC_CID_SERVER_ONLINE_USER_CNT_RESP",    // = 31;
  32 => "MGC_CID_SERVER_OFFICIAL_EMPLOYEE_REQ",  //  = 32; // 官方客服请求
  33 => "MGC_CID_SERVER_OFFICIAL_EMPLOYEE_RESP", //  = 33;
  34 => "MGC_CID_SERVER_FILTER_MSG_DATA",         // = 34; // 过滤消息数据
  35 => "MGC_CID_SERVER_GET_SYSTEM_FORBID_REQ",   // = 35; // 请求系统屏蔽用户列表请求
  36 => "MGC_CID_SERVER_GET_SYSTEM_FORBID_RESP",  // = 36; // 请求系统屏蔽用户列表回复
  37 => "MGC_CID_SERVER_UPDATE_SYSTEM_FORBID_REQ",//  = 37; // 更新系统屏蔽用户
  // @benqi; 2015-05-13
  40 => "MGC_CID_SERVER_MSG_DATA_PUSH_REQ",      //  = 40; // 消息推送请求
  41 => "MGC_CID_SERVER_MSG_DATA_PUSH_RESP",      // = 41; // 消息推送回复
  42 => "MGC_CID_SERVER_GROUP_MSG_DATA_PUSH_REQ", // = 42; // 群聊消息推送请求
  43 => "MGC_CID_SERVER_GROUP_MSG_DATA_PUSH_RESP",// = 43; // 群聊消息推送回复
  44 => "MGC_CID_SERVER_SERVICE_WELCOME_MSG_REQ", // = 44;//客服欢迎语
  45 => "MGC_CID_SERVER_SERVICE_WELCOME_MSG_RESP",//= 45;

  // @benqi; 2015-07-01
  46 => "MGC_CID_SERVER_SINGLE_SLIENT_PUSH_REQ",  // = 46;// SingleSlient推送请求
  47 => "MGC_CID_SERVER_SINGLE_SLIENT_PUSH_RESP", // = 47;// SingleSlient消息推送回复
  48 => "MGC_CID_SERVER_UMP_PUSH_REQ ",           // = 48;// Ump消息推送请求
  49 => "MGC_CID_SERVER_UMP_PUSH_RESP",           // = 49;// Ump消息推送回复
  50 => "MGC_CID_SERVER_BATCH_PUSH_REQ ",         // = 50;// Batch消息推送请求
  51 => "MGC_CID_SERVER_BATCH_PUSH_RESP",         // = 51;// Batch消息推送回复

  // @yugui; 2015-07-10
  52 => "MGC_CID_SERVER_USER_TYPE_REQ ",          // = 52; // Batch消息推送请求
  53 => "MGC_CID_SERVER_USER_TYPE_RESP ",         // = 53; // Batch消息推送回复

  // @yugui; 2015-07-13
  54 => "MGC_CID_SERVER_ANTISPAM_TRUST_USER_REQ", // = 54; // Batch消息推送请求
  55 => "MGC_CID_SERVER_ANTISPAM_TRUST_USER_RESP",  // = 55; // Batch消息推送回复
  56 => "MGC_CID_SERVER_GET_LAST_SERVICE_REQ", // = 56;    //获取最后聊天客服
  57 => "MGC_CID_SERVER_GET_LAST_SERVICE_RESP",//  = 57;
  58 => "MGC_CID_SERVER_GET_SERVICE_LIST_REQ ", //  = 58;    //获取有权限的客服ID列表
  59 => "MGC_CID_SERVER_GET_SERVICE_LIST_RESP", //  = 59;
  60 => "MGC_CID_SERVER_GET_SERVICE_LOAD_REQ",  // = 60;    //获取客服负载
  61 => "MGC_CID_SERVER_GET_SERVICE_LOAD_RESP", // = 61;
  62 => "MGC_CID_SERVER_GET_SERVICE_DISPATCH_REQ", // = 62; //获取客服分配记录缓存
  63 => "MGC_CID_SERVER_GET_SERVICE_DISPATCH_RESP",//  = 63;
  64 => "MGC_CID_SERVER_IMG_BATCH_PUSH_REQ",     //   = 64;// 附带图片Batch消息推送请求
  65 => "MGC_CID_SERVER_IMG_BATCH_PUSH_RESP",    //   = 65;// 附带图片Batch消息推送回复
  66 => "MGC_CID_SERVER_SLIENT_BROADCAST_SYS_MSG",  //  = 66; //add by tianshan; 静默推送系统消息，只通过聊天通道发送消息，不做推送通知
  67 => "MGC_CID_SERVER_FETCH_CONVERSATION_INFO_REQ", //  = 67;  //获取sessionInfo;如果不存在则创建
  68 => "MGC_CID_SERVER_FETCH_CONVERSATION_INFO_RESP", //  = 68;
  69 => "MGC_CID_SERVER_GET_CONVERSATION_INFO_REQ", //  = 69; //获取session信息
  70 => "MGC_CID_SERVER_GET_CONVERSATION_INFO_RESP", //  = 70;
  71 => "MGC_CID_SERVER_GROUP_DEL_REQ",//  = 71;     //删除群会话
  72 => "MGC_CID_SERVER_GROUP_DEL_RESP", // = 72;
  77 => "MGC_CID_SERVER_GET_CONVERSATION_REQ",   //  = 77; //内部使用，根据from_id和to_id获取会话
  78 => "MGC_CID_SERVER_GET_SSSION_RESP",   //  = 78;
  79 => "MGC_CID_SERVER_UPDATE_CONVERSATION_REQ", //  = 79;
  80 => "MGC_CID_SERVER_UPDATE_CONVERSATION_RESP", // = 80;
  83 => "MGC_CID_SERVER_FETCH_CONVERSATION_CACHE_REQ", // = 83;
  84 => "MGC_CID_SERVER_FETCH_CONVERSATION_CACHE_RESP",//  = 84;
  85 => "MGC_CID_SERVER_CACHE_MESSAGE", // = 85;
  86 => "MGC_CID_SERVER_DC_INSERT_REQ", // = 86; // insert
  87 => "MGC_CID_SERVER_DC_INSERT_RESP",//  = 87;
  88 => "MGC_CID_SERVER_DC_UPDATE_REQ", // = 88; // update
  89 => "MGC_CID_SERVER_DC_UPDATE_RESP", // = 89;
  90 => "MGC_CID_SERVER_DC_SELECT_REQ", // = 90; // select
  91 => "MGC_CID_SERVER_DC_SELECT_RESP",//  = 91;
  92 => "MGC_CID_SERVER_DC_DELETE_REQ", // = 92; // delete
  93 => "MGC_CID_SERVER_DC_DELETE_RESP", // = 93;
  94 => "MGC_CID_SERVER_DC_INCR_REQ", // = 94; // incr
  95 => "MGC_CID_SERVER_DC_INCR_RESP", // = 95;
  96 => "MGC_CID_SERVER_DC_COUNT_REQ", // = 96;  // count
  97 => "MGC_CID_SERVER_DC_COUNT_RESP", // = 97;
  98 => "MGC_CID_SERVER_DC_BATCH_SELECT_REQ", // = 98; // batch select
  99 => "MGC_CID_SERVER_DC_BATCH_SELECT_RESP", // = 99;
  100 => "MGC_CID_SERVER_USER_STATUS_BROADCAST_NOTIFY", // = 100; //用户在线状态广播
  101 => "MGC_CID_SERVER_ALL_USERS_STATUS_REQ", //         = 101; //所有在线用户信息请求
  //access_server login loadbalancer req
  102 => "MGC_CID_SERVER_LOGIN_LB_SERV_REQ", //= 102;
  103 => "MGC_CID_SERVER_LOGIN_LB_SERV_RESP", // = 103;
  //access_server report loadbalancer req
  104 => "MGC_CID_SERVER_REPORT_LB_SERV_REQ", // = 104;
  105 => "MGC_CID_SERVER_REPORT_LB_SERV_RESP", // = 105;
  107 => "MGC_CID_SERVER_USER_PRIMARY_INFO_REQ", // = 107;
  108 => "MGC_CID_SERVER_USER_PRIMARY_INFO_RESP", // = 108;
  109 => "MGC_CID_SERVER_APPSERVER_USERINFO_REQ", // = 109;
  110 => "MGC_CID_SERVER_APPSERVER_USERINFO_RESP", // = 110;
  111 => "MGC_CID_SERVER_APPSERVER_SHOPID_REQ", // = 111;
  112 => "MGC_CID_SERVER_APPSERVER_SHOPID_RESP", // = 112;
  113 => "MGC_CID_SERVER_APPSERVER_SHOPEMPLOYEEID_REQ", // = 113;
  114 => "MGC_CID_SERVER_APPSERVER_SHOPEMPLOYEEID_RESP", // = 114;
  115 => "MGC_CID_SERVER_APPSERVER_SHOPEMPLOYEE_REQ", // = 115;
  116 => "MGC_CID_SERVER_APPSERVER_SHOPEMPLOYEE_RESP", // = 116;
  130 => "MGC_CID_SERVER_PUSH_NOTIFY", // = 130;           // 消息推送到push server的协议
  131 => "MGC_CID_SERVER_OFFICIAL_PUSH_REQ", // = 131;       // 官方推送的入口协议类型
  132 => "MGC_CID_SERVER_OFFICIAL_PUSH_MSG_SEND_REQ", // = 132;    // 推送消息同api server到msg server的处理
  133 => "MGC_CID_SERVER_OFFICIAL_PUSH_MSG_SEND_RESP", // = 133;   // 消息推送的回复，msg server到api server的
  136 => "MGC_CID_SERVER_USERS_BADGE_REQ", // = 136;         // 角标操作的协议
  137 => "MGC_CID_SERVER_USERS_BADGE_RESP", // = 137;
  138 => "MGC_CID_SERVER_LOGGING_INFO", // = 138;                    // BI数据上报，转送给general_server
  150 => "MGC_CID_SERVER_MSG_FILTER_PUSH_MSG_SEND_REQ", // = 150;  // msg server 到 msg filter 的消息
  151 => "MGC_CID_SERVER_MSG_FILTER_PUSH_MSG_SEND_RESP", // = 151; // msg filter 到 msg server 的消息响应
  180 => "MGC_CID_SERVER_SUBSCRIBE_GET_WHO_SUBSCRIBED_MY_STATE_REQ", // = 180;
  181 => "MGC_CID_SERVER_SUBSCRIBE_GET_WHO_SUBSCRIBED_MY_STATE_RESP", // = 181;
  );

$MGCLoginCmdID  = array(
  	"MGC_CID_LOGIN_UNKNOWN			   ",    //  = 0; // 未定义预留
  	"MGC_CID_LOGIN_ACCESS_SERV_REQ ",   //  = 1; // 获取接入服务器信息接口请求
  	"MGC_CID_LOGIN_ACCESS_SERV_RESP",   //  = 2; // 获取接入服务器信息接口响应
  	"MGC_CID_LOGIN_USER_LOGIN_REQ  ",   //  = 3; // 用户登陆请求
  	"MGC_CID_LOGIN_USER_LOGIN_RESP ",   //  = 4; // 用户登陆响应
  	"MGC_CID_LOGIN_USER_LOGOUT_REQ ",   //  = 5; // 用户登出请求
  	"MGC_CID_LOGIN_USER_LOGOUT_RESP",   //  = 6; // 用户登出响应
  	"MGC_CID_LOGIN_KICK_USER       ",   //  = 7; // 用户重复登陆被踢
    "MGC_CID_LOGIN_TIMESYNC_REQ    ",   //  = 8; // 时间同步请求
    "MGC_CID_LOGIN_TIMESYNC_RESP   ",   //  = 9; // 时间同步应答
    "MGC_CID_LOGIN_STATE_REQ       ",   //  = 10;// 登录终端查询
    "MGC_CID_LOGIN_STATE_RESP      ",   //  = 11;// 登录终端查询
    "MGC_CID_LOGIN_KICK_OTHER_REQ  ",   //  = 12;// 踢出指定用户的其他登录请求
    "MGC_CID_LOGIN_KICK_OTHER_RESP ",   //  = 13;// 踢出指定用户的其他登录应答
    "MGC_CID_LOGIN_STATE_PUSH      ",   //  = 14;// 终端登录状态变化通知
    "MGC_CID_LOGIN_STATE_PUSH_ACK  "   //  = 15;// 中断登录状态变化通知ACK
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for buddy list
$MGCConversationCmdID  = array (
  	"MGC_CID_CONVERSATION_UNKNOWN				 ",   // = 0; // 未定义预留
  	"MGC_CID_CONVERSATION_REQ            ",    // = 1; // 根据会话时间，批量获取会话
  	"MGC_CID_CONVERSATION_RESP           ",    // = 2; // 根据会话时间，批量获取会话应答
  	"MGC_CID_CONVERSATION_UPDATE_REQ     ",    // = 3; // 会话更新列表请求
  	"MGC_CID_CONVERSATION_UPDATE_RESP    ",    // = 4; // 会话更新列表应答
  	"MGC_CID_CONVERSATION_FETCH_REQ      ",    // = 5; // 会话信息请求
  	"MGC_CID_CONVERSATION_FETCH_RESP     ",    // = 6; // 会话信息应答
  	"MGC_CID_CONVERSATION_CREATE_REQ     ",    // = 7; // 创建会话请求
  	"MGC_CID_CONVERSATION_CREATE_RESP    ",    // = 8; // 创建会话应答
  	"MGC_CID_CONVERSATION_REMOVE_REQ     ",    // = 9; // 删除会话请求
  	"MGC_CID_CONVERSATION_REMOVE_RESP    ",    // = 10; // 删除会话应答
  	"MGC_CID_CONVERSATION_OPERATE_REQ    ",    // = 11; // 修改会话状态请求
  	"MGC_CID_CONVERSATION_OPERATE_RESP   ",    // = 12; // 修改会话状态应答
  	"MGC_CID_CONVERSATION_PUSH           ",    // = 13; //服务器推送会话更新
  	"MGC_CID_CONVERSATION_PUSH_ACK       ",    // = 14; //客户端应答
  	"MGC_CID_CONVERSATION_LASTMESSAGE_REQ ",   // = 15; //请求会话最后一条消息
  	"MGC_CID_CONVERSATION_LASTMESSAGE_RESP",   // = 16; //
  	"MGC_CID_CONVERSATION_UNREAD_REQ     ",     // = 17; //请求会话未读计数
  	"MGC_CID_CONVERSATION_UNREAD_RESP    ",     // = 18; //
  	"MGC_CID_CONVERSATION_UNREAD_ALL_REQ " ,   // = 19; //请求所有会话未读计数
  	"MGC_CID_CONVERSATION_UNREAD_ALL_RESP"     // = 20; //
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for peer to peer message
$MGCGroupCmdID = array(
  	"MGC_CID_GROUP_UNKNOWN	               ",      // = 0; // 未定义预留
  	"MGC_CID_GROUP_CREATE_REQ              ",     // = 1;
    "MGC_CID_GROUP_CREATE_RESP             ",     // = 2;
   	"MGC_CID_GROUP_DELETE_REQ              ",     // = 3;
    "MGC_CID_GROUP_DELETE_RESP             ",     // = 4;
    "MGC_CID_GROUP_UPDATE_REQ              ",     // = 5;
    "MGC_CID_GROUP_UPDATE_RESP             ",     // = 6;
    "MGC_CID_GROUP_GET_REQ                 ",     // = 7;
    "MGC_CID_GROUP_GET_RESP                ",     // = 8;
    "MGC_CID_GROUP_ADD_MEMBER_REQ          ",     // = 9;
    "MGC_CID_GROUP_ADD_MEMBER_RESP         ",     // = 10;
    "MGC_CID_GROUP_DELETE_MEMBER_REQ       ",     // = 11;
    "MGC_CID_GROUP_DELETE_MEMBER_RESP      ",     // = 12;
    "MGC_CID_GROUP_GET_APPLIER_REQ         ",     // = 13;
    "MGC_CID_GROUP_GET_APPLIER_RESP        ",     // = 14;
    "MGC_CID_GROUP_OPERATE_APPLIER_REQ     ",     // = 15;
    "MGC_CID_GROUP_OPERATE_APPLIER_RESP    ",     // = 16;
    "MGC_CID_GROUP_OPERATE_ADMIN_REQ       ",     // = 17;
    "MGC_CID_GROUP_OPERATE_ADMIN_RESP      ",     // = 18;
    "MGC_CID_GROUP_DELETE_PUSH             ",     // = 19;
    "MGC_CID_GROUP_DELETE_PUSH_ACK         ",     // = 20;
    "MGC_CID_GROUP_UPDATE_PUSH             ",     // = 21;
    "MGC_CID_GROUP_UPDATE_PUSH_ACK         ",     // = 22;
    "MGC_CID_GROUP_MEMBER_ADD_PUSH         ",     // = 23;
  	"MGC_CID_GROUP_MEMBER_ADD_PUSH_ACK     ",     // = 24;
  	"MGC_CID_GROUP_MEMBER_DELETE_PUSH      ",     // = 25;
  	"MGC_CID_GROUP_MEMBER_DELETE_PUSH_ACK  ",     // = 26;
  	"MGC_CID_GROUP_ADMIN_OPERATE_PUSH      ",     // = 27;
  	"MGC_CID_GROUP_ADMIN_OPERATE_PUSH_ACK  ",     // = 28;
  	"MGC_CID_GROUP_APPLIER_OPERATE_PUSH    ",     // = 29;
  	"MGC_CID_GROUP_APPLIER_OPERATE_PUSH_ACK",     // = 30;
    "MGC_CID_GROUP_OWNER_TRANSFER_REQ      ",     // = 31;
    "MGC_CID_GROUP_OWNER_TRANSFER_RESP     ",     // = 32;
    "MGC_CID_GROUP_OWNER_TRANSFER_PUSH     ",     // = 33;
    "MGC_CID_GROUP_OWNER_TRANSFER_PUSH_ACK "     // = 34;
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for group message
$MGCMsgCmdID  = array(
  	"MGC_CID_MESSAGE_UNKNOWN				       ",     // = 0; // 未定义预留
	  "MGC_CID_MESSAGE_SEND_REQ 	           ",     // = 1;
    "MGC_CID_MESSAGE_SEND_RESP 	           ",     // = 2;
    "MGC_CID_MESSAGE_PUSH      	           ",     // = 3; //服务器推送实时消息到客户端
    "MGC_CID_MESSAGE_PUSH_ACK  	           ",     // = 4; //客户端响应服务端的推送消息
    "MGC_CID_MESSAGE_HISTORY_MESSAGE_REQ   ",     // = 5; //获取会话历史消息
    "MGC_CID_MESSAGE_HISTORY_MESSAGE_RESP  ",     // = 6; //获取会话历史消息应答
    "MGC_CID_MESSAGE_READ_REQ              ",     // = 7; //客户端通知会话消息已读，无需服务器应答
    "MGC_CID_MESSAGE_READ_RESP             ",     // = 8;
    "MGC_CID_MESSAGE_MODIFY_REQ            ",     // = 9;
    "MGC_CID_MESSAGE_MODIFY_RESP           ",     // = 10;
    "MGC_CID_MESSAGE_READ_PUSH             "     // = 11;
);

///////////////////////////////////////////////////////////////////////////////////////
// command if for cinfo
$MGCP2PMsgCmdID = array(  	
    "MGC_CID_P2P_UNKNOWN		",    // = 0; // 未定义预留
 	  "MGC_CID_P2P_SEND_REQ   ",   // = 1;
    "MGC_CID_P2P_SEND_RESP  ",   // = 2;
    "MGC_CID_P2P_PUSH       ",   // = 3;//服务器推送实时消息到客户端
    "MGC_CID_P2P_PUSH_ACK   "   // = 4;//客户端响应服务端的推送消息
);


///////////////////////////////////////////////////////////////////////////////////////
// command if for cinfo
$MGCUserInfoCmdID = array(
  	"MGC_CID_USERINFO_UNKNOWN		             ",       // = 0; // 未定义预留
  	"MGC_CID_USERINFO_ONLINE_STATE_NOTIRY	   ",       // = 1;
  	"MGC_CID_USERINFO_ONLINE_STATE_REQ	     ",         // = 2;
  	"MGC_CID_USERINFO_ONLINE_STATE_RESP	     ",       // = 3;
  	"MGC_CID_USERINFO_STATE_SETTING_REQ	     ",       // = 4;
  	"MGC_CID_USERINFO_STATE_SETTING_RESP	   ",         // = 5;
  	"MGC_CID_USERINFO_USERS_INFO_REQ	       ",         // = 6;
  	"MGC_CID_USERINFO_USERS_INFO_RESP	       ",       // = 7;
  	"MGC_CID_USERINFO_ADD_STATE_MONITOR_REQ  ",        // = 8;
    "MGC_CID_USERINFO_ADD_STATE_MONITOR_RESP ",        // = 9;
    "MGC_CID_USERINFO_DEL_STATE_MONITOR_REQ  ",        // = 10;
    "MGC_CID_USERINFO_DEL_STATE_MONITOR_RESP ",        // = 11;
    "MGC_CID_USERINFO_GET_STATE_MONITOR_REQ  ",        // = 12;
    "MGC_CID_USERINFO_GET_STATE_MONITOR_RESP "       // = 13;
);



///////////////////////////////////////////////////////////////////////////////////////
// command if for cinfo
$MGCCInfoCmdID  = array (
  	"MGC_CID_CINFO_UNKNOWN	 ",	     // = 0; // 未定义预留
  	"MGC_CID_CINFO_CNT_REQ   ",      // = 1; // 全部业务未读计数请求
  	"MGC_CID_CINFO_CNT_RESP  ",      // = 2; // 全部业务未读计数回复
  	"MGC_CID_CINFO_CNT_NOTIFY",      // = 3; // 服务端主动通知全部业务未读计数更新
  	"MGC_CID_CINFO_MAP_REQ   ",      // = 4; // 服务端使用; redis上的counter名称到客户端counter名称的映射请求("catmeNew"->"a")
  	"MGC_CID_CINFO_MAP_RESP  "       // = 5;
);

///////////////////////////////////////////////////////////////////////////////////////
// command if for monitor
$MGCMonitorCmdID  = array(
  	"MGC_CID_MONITOR_SERVER_UNKNOWN  			   ",     // = 0; // 未定义预留
  	"MGC_CID_MONITOR_ACTION_PUSH             ",      // = 1; // 通知客户端主动执行一些命令
  	"MGC_CID_MONITOR_ACTION_PUSH_ACK         ",      // = 2; // 客户端收到命令的应答
  	"MGC_CID_MONITOR_SERVER_REGISTER         ",      // = 3; // 向监控服务器注册当前服务器信息，服务端用
  	"MGC_CID_MONITOR_SERVER_UNREGISTER       ",      // = 4; // 从监控服务器注销，服务端用
    "MGC_CID_MONITOR_VISOR_DATA              ",      // = 5; // 监控数据上报
    "MGC_CID_MONITOR_BIZ_DATA                ",      // = 6; // 业务数据上报
    "MGC_CID_MONITOR_UPLOAD_ACK              ",      // = 7; // 数据上报回复
  	"MGC_CID_MONITOR_REPORT_SERV_INFO        ",      // = 8; // 监控服务器向各被监控终端注册自己的server_number，服务端用
  	"MGC_CID_MONITOR_NOTIFY_CLIENT_DO_ACTION "      // = 9; // 通知客户端主动执行一些命令，比如上报当前网络环境数据等，消息体为json",
);
///////////////////////////////////////////////////////////////////////////////////////
// command id for general
$MGCGeneralCmdID = array(
	  "MGC_CID_GENERAL_UNKNOWN		 ",    // = 0; // 未定义预留
  	"MGC_CID_GENERAL_HEARTBEAT   ",    // = 1; // 心跳包
  	"MGC_CID_GENERAL_ERRORREPORT ",    // = 2; // 错误报告
  	"MGC_CID_GENERAL_ECHO_REQ    ",    // = 3; // echo 请求
  	"MGC_CID_GENERAL_ECHO_RESP   ",    // = 4; // echo 应答 
  	"MGC_CID_GENERAL_FORWARD_REQ ",    // = 5; // forward 请求
  	"MGC_CID_GENERAL_FORWARD_RESP"     // = 6; // forward 应答 
);


///////////////////////////////////////////////////////////////////////////////////////
// command id for ipservice
$MGCIpServiceCmdID = array(
	"MGC_CID_IPSERVICE_UNKNOWN		         ",  // = 0;	// 未定义预留
	"MGC_CID_IPSERVICE_DELAY_FEEDBACK      ",  // = 1; // 向ipservice业务服务器上报客户端延时信息，服务端用
	"MGC_CID_IPSERVICE_UNAVAILABLE_FEEDBACK"  // = 2; // 向ipservice业务服务器上报服务不可用信息，服务端用
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for service dispatch
$MGCServiceDispatchCmdID  = array(
    "MGC_CID_SERVICE_DISPATCH_GET_SERVICE_REQ              ",      // = 1;//分配客服请求
    "MGC_CID_SERVICE_DISPATCH_GET_SERVICE_RESP             ",      // = 2;//分配客服响应
    "MGC_CID_SERVICE_DISPATCH_SWITCH_SERVICE_REQ           ",      // = 3;//转客服请求
    "MGC_CID_SERVICE_DISPATCH_SWITCH_SERVICE_RESP          ",      // = 4;//转客服响应
    "MGC_CID_SERVICE_DISPATCH_DESTROY_SERVICE_SESSION_REQ  ",      // = 5;//结束与用户的会话
    "MGC_CID_SERVICE_DISPATCH_DESTROY_SERVICE_SESSION_RESP ",      // = 6;//结束与用户的会话
    "MGC_CID_SERVICE_DISPATCH_GET_LAST_SERVICE_REQ         ",      // = 7;//获取最后一次分配的客服
    "MGC_CID_SERVICE_DISPATCH_GET_LAST_SERVICE_RESP        "     // = 8;//获取最后一次分配的客服
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for transmit
$MGCTransmitCmdID = array(
    "MGC_CID_TRANSMIT_UNKNOW      ",       /// = 0;     //未定义预留
    "MGC_CID_TRANSMIT_SEND_REQ    ",       /// = 1;     //客户端发送传输消息请求
    "MGC_CID_TRANSMIT_SEND_RESP   ",       /// = 2;     //客户端发送传输消息应答
    "MGC_CID_TRANSMIT_PUSH        ",       /// = 3;     //客户端接受服务器推送的传输消息
    "MGC_CID_TRANSMIT_PUSH_ACK    "        /// = 4;     //客户端发送收到传输消息的应答
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for biz
$MGCBizCmdID = array(
    "MGC_CID_BIZ_UNKNOW             ",     // = 0;     //未定义预留
    "MGC_CID_BIZ_SWITCH_SERVICE_REQ ",     // = 1;     //客户端发送转客服消息请求
    "MGC_CID_BIZ_SWITCH_SERVICE_RESP",     // = 2;     //客户端发送转客服消息应答
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for chatroom
$MGCChatroomCmdID = array(
    "MGC_CID_CHATROOM_UNKNOWN               ",     // = 0;// 未定义预留
    "MGC_CID_CHATROOM_CREATE_REQ            ",     // = 1;//创建聊天室
    "MGC_CID_CHATROOM_CREATE_RESP           ",     // = 2;
    "MGC_CID_CHATROOM_DELETE_REQ            ",     // = 3;//删除聊天室
    "MGC_CID_CHATROOM_DELETE_RESP           ",     // = 4;
    "MGC_CID_CHATROOM_UPDATE_REQ            ",     // = 5;//更新聊天室信息
    "MGC_CID_CHATROOM_UPDATE_RESP           ",     // = 6;
    "MGC_CID_CHATROOM_GET_REQ               ",     // = 7;//获取聊天室详情
    "MGC_CID_CHATROOM_GET_RESP              ",     // = 8;
    "MGC_CID_CHATROOM_ADD_MEMBER_REQ        ",     // = 9;//加入聊天室
    "MGC_CID_CHATROOM_ADD_MEMBER_RESP       ",     // = 10;
    "MGC_CID_CHATROOM_DELETE_MEMBER_REQ     ",     // = 11;//离开聊天室
    "MGC_CID_CHATROOM_DELETE_MEMBER_RESP    ",     // = 12;
    "MGC_CID_CHATROOM_GET_MEMBER_REQ        ",     // = 13;//获取聊天室在线成员列表
    "MGC_CID_CHATROOM_GET_MEMBER_RESP       ",     // = 14;
    "MGC_CID_CHATROOM_GET_MEMBER_CNT_REQ    ",     // = 15;//获取聊天室在线成员数
    "MGC_CID_CHATROOM_GET_MEMBER_CNT_RESP   ",     // = 16;
    "MGC_CID_CHATROOM_SEND_MSG_REQ          ",     // = 17;//发送聊天室消息
    "MGC_CID_CHATROOM_SEND_MSG_RESP         ",     // = 18;
    "MGC_CID_CHATROOM_OPERATE_ADMIN_REQ     ",     // = 19;//操作聊天室管理员
    "MGC_CID_CHATROOM_OPERATE_ADMIN_RESP    ",     // = 20;
    "MGC_CID_CHATROOM_SEND_MSG_PUSH         ",     // = 21;//服务器推送一条实时消息 [全员在线推送]
    "MGC_CID_CHATROOM_SEND_MSG_PUSH_ACK     ",     // = 22;//服务器推送一条实时消息 [全员在线推送]
    "MGC_CID_CHATROOM_DELETE_PUSH           ",     // = 23;//删除聊天室推送消息 [全员在线推送]
    "MGC_CID_CHATROOM_DELETE_PUSH_ACK       ",     // = 24;//删除聊天室推送应答消息
    "MGC_CID_CHATROOM_UPDATE_PUSH           ",     // = 25;//聊天室信息更新推送 [全员在线推送]
    "MGC_CID_CHATROOM_UPDATE_PUSH_ACK       ",     // = 26;//删除聊天室推送应答消息
    "MGC_CID_CHATROOM_MEMBER_ADD_PUSH       ",     // = 27;//聊天室成员添加推送 [被操作者在线推送，同时有消息提醒]
    "MGC_CID_CHATROOM_MEMBER_ADD_PUSH_ACK   ",     // = 28;//聊天室成员添加推送应答消息
    "MGC_CID_CHATROOM_MEMBER_DELETE_PUSH    ",     // = 29;//聊天室成员删除推送 [被操作者在线推送，同时有消息提醒]
    "MGC_CID_CHATROOM_MEMBER_DELETE_PUSH_ACK",     // = 30;//聊天室成员删除推送应答消息
    "MGC_CID_CHATROOM_ADMIN_OPERATE_PUSH    ",     // = 31;//聊天室管理员设置推送 [被操作者在线推送，同时有消息提醒]
    "MGC_CID_CHATROOM_ADMIN_OPERATE_PUSH_ACK"     // = 32;//聊天室管理员设置推送应答
);

////////////////////////////////////////////////////////////////////////////////////////////
// command id for ancient 

$MGCAncientCmdID= array(
	"MGC_CID_ANCIENT_UNKNOWN 				        ",             // = 0;
	"MGC_CID_ANCIENT_LOGIN_REQ 				      ",             // = 1;
	"MGC_CID_ANCIENT_LOGIN_RESP 				    ",             // = 2;
	"MGC_CID_ANCIENT_USER_INFO_REQ 			    ",             // = 3;
	"MGC_CID_ANCIENT_USER_INFO_RESP 		    ",             // = 4;
	"MGC_CID_ANCIENT_SHOP_MEMBER_REQ 		    ",             // = 5;
	"MGC_CID_ANCIENT_SHOP_MEMBER_RESP 	    ",             // = 6;
	"MGC_CID_ANCIENT_SHOP_INFO_REQ 			    ",             // = 7;
	"MGC_CID_ANCIENT_SHOP_INFO_RESP 		    ",             // = 8;
	"MGC_CID_ANCIENT_SESSION_CREATE_REQ 	  ",             // = 9;
	"MGC_CID_ANCIENT_SESSION_CREATE_RESP 	  ",             // = 10;
	"MGC_CID_ANCIENT_SESSION_FETCH_REQ 		  ",             // = 11;
	"MGC_CID_ANCIENT_SESSION_FETCH_RESP 	  ",             // = 12;
	"MGC_CID_ANCIENT_RECENT_CONTACTS_REQ 	  ",             // = 13;
	"MGC_CID_ANCIENT_RECENT_CONTACTS_RESP   ",             // = 14;
	"MGC_CID_ANCIENT_HISTORY_MSG_REQ			  ",             // = 15;	//单聊历史，未读消息
	"MGC_CID_ANCIENT_HISTORY_MSG_RESP		    ",             // = 16;
	"MGC_CID_ANCIENT_GROUP_HISTORY_MSG_REQ	",             // = 17;	//群聊历史，未读消息
	"MGC_CID_ANCIENT_GROUP_HISTORY_MSG_RESP	",             // = 18;
	"MGC_CID_ANCIENT_READ_ACK				        ",             // = 19;
	"MGC_CID_ANCIENT_UNREAD_CNT_REQ			    ",             // = 20;	//单聊，群聊未读计数
	"MGC_CID_ANCIENT_UNREAD_CNT_RESP			  ",             // = 21;
	"MGC_CID_ANCIENT_BATCH_UNREAD_CNT_REQ	  ",             // = 22;	//群，单角标计数请求
	"MGC_CID_ANCIENT_BATCH_UNREAD_CNT_RESP	",             // = 23;
	"MGC_CID_ANCIENT_MODIFY_GROUP_REQ		    ",             // = 24;	//修改群属性信息请求
	"MGC_CID_ANCIENT_MODIFY_GROUP_RESP		  ",             // = 25;	
	"MGC_CID_ANCIENT_GROUP_MEMBER_OPT_REQ	  ",             // = 26;	//删除群成员，管理员操作
	"MGC_CID_ANCIENT_GROUP_MEMBER_OPT_RESP 	",             // = 27;
	"MGC_CID_ANCIENT_GET_CREATE_GROUP_REQ	  ",             // = 28;	//获取创建的群列表
	"MGC_CID_ANCIENT_GET_CREATE_GROUP_RESP	",             // = 29;
	"MGC_CID_ANCIENT_GROUP_INFO_REQ			    ",             // = 30;
	"MGC_CID_ANCIENT_GROUP_INFO_RESP			  ",             // = 31;
	"MGC_CID_ANCIENT_SERVICE_REQ				    ",             // = 32;	//客服分配
	"MGC_CID_ANCIENT_SERVICE_RESP			      ",             // = 33;
	"MGC_CID_ANCIENT_LAST_SERVICE_REQ		    ",             // = 34;	//最近联系客服
	"MGC_CID_ANCIENT_LAST_SERVICE_RESP		  "              // = 35;
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for subscribe

$MGCSubscribeCmdID= array(
    "MGC_CID_SUBSCRIBE_ADD_STATE_SUBSCRIBE_REQ  ",       // = 1;//增加订阅请求
    "MGC_CID_SUBSCRIBE_ADD_STATE_SUBSCRIBE_RESP ",       // = 2;//增加订阅回复
    "MGC_CID_SUBSCRIBE_DEL_STATE_SUBSCRIBE_REQ  ",       // = 3;//删除订阅请求
    "MGC_CID_SUBSCRIBE_DEL_STATE_SUBSCRIBE_RESP ",       // = 4;//删除订阅回复
    "MGC_CID_SUBSCRIBE_GET_STATE_SUBSCRIBE_REQ  ",       // = 5;//获取订阅请求
    "MGC_CID_SUBSCRIBE_GET_STATE_SUBSCRIBE_RESP "       // = 6;//获取订阅回复
);

///////////////////////////////////////////////////////////////////////////////////////
// command id for mwp

$MGCMwpCmdID= array(
    "MGC_CID_MWP_UNKOWN       ",   // = 0;//未定义预留
    "MGC_CID_MWP_REGISTER_REQ ",   // = 1;//MWP注册请求
    "MGC_CID_MWP_REGISTER_RESP",   // = 2;//MWP注册响应
    "MGC_CID_MWP_SERVICE_REQ  ",   // = 3;//MWP业务请求
    "MGC_CID_MWP_SERVICE_RESP "    // = 4;//MWP业务请求响应
);

///////////////////////////////////////////////////////////////////////////////////////

//用户的在线状态
$MGCUserOnlineState= array(
    "MGC_USER_ONLINE_STATE_ONLINE ",  // = 1;	//在线
    "MGC_USER_ONLINE_STATE_OFFLINE",  // = 2; //离线
    "MGC_USER_ONLINE_STATE_LEAVE  "   // = 3; //离开
);

//终端类型
$MGCClientType= array(
    "MGC_CLIENT_TYPE_UNKNOWN	",	//  = 0;
    "MGC_CLIENT_TYPE_WIN      ",  //  = 1;
    "MGC_CLIENT_TYPE_MAC			",  //  = 2;
    "MGC_CLIENT_TYPE_FLASH    ",  //  = 3;
    "MGC_CLIENT_TYPE_ANDROID	",	//  = 4;
    "MGC_CLIENT_TYPE_IOS			",  //  = 5;
    "MGC_CLIENT_TYPE_WINPHONE ",  //  = 6;
    "MGC_CLIENT_TYPE_HTTP     ",  //  = 7;
    "MGC_CLIENT_TYPE_CINFO    ",  //  = 8;
    "MGC_CLIENT_TYPE_COUNT    "  //  = 9;
);

//错误类型
$MGCResultType= array(
    "MGC_REFUSE_REASON_NONE				       ",     // = 0;
    "MGC_REFUSE_REASON_NO_MSG_SERVER	   ",     // = 1;
    "MGC_REFUSE_REASON_MSG_SERVER_FULL 	 ",     // = 2;
    "MGC_REFUSE_REASON_NO_DB_SERVER		   ",     // = 3;
    "MGC_REFUSE_REASON_NO_LOGIN_SERVER	 ",     // = 4;
    "MGC_REFUSE_REASON_NO_ROUTE_SERVER	 ",     // = 5;
    "MGC_REFUSE_REASON_DB_VALIDATE_FAILED",     // = 6;
    "MGC_REFUSE_REASON_VERSION_TOO_OLD	 "      // = 7;
);

//踢除类型
$MGCKickReasonType= array(
    "MGC_KICK_REASON_DUPLICATE_WIN_USER",  // = 1; // windows只支持一个客户端登陆
    "MGC_KICK_REASON_BY_SERVER  "         // = 2; // 后台PHP接口发起的踢人动作
);

$MGCConversationOperateType = array(
	"CONVERSATION_OPER_FORBID     ",         // = 1;     //屏蔽
	"CONVERSATION_OPER_UNFORBID   ",         // = 2;   //取消屏蔽
	"CONVERSATION_OPER_TOP        ",         // = 3;        //置顶
	"CONVERSATION_OPER_UNTOP      ",         // = 4;      //取消置顶
	"CONVERSATION_OPER_DND        ",         // = 5;        //免打扰
	"CONVERSATION_OPER_CANCEL_DND "          // = 6; //取消免打扰
);

$MGCMessageType= array(
     "MESSAGE_TYPE_TEXT               ",          // = 501;       //文本消息类型
     "MESSAGE_TYPE_IMAGE              ",          // = 502;      //图片消息类型
     "MESSAGE_TYPE_VOICE              ",          // = 503;      //语音消息类型
     "MESSAGE_TYPE_EMOTION            ",          // = 504;    //表情消息类型
     "MESSAGE_TYPE_COMBINE            ",          // = 505;    //组合消息类型
     "MESSAGE_TYPE_GROUPNAME_MODIFY   ",          // = 511; //群名称修改消息
     "MESSAGE_TYPE_GROUPMEMBER_MODIFY ",          // = 512; //群成员变化消息
     "MESSAGE_TYPE_GROUPADMIN_MODIFY  ",          // = 513; //群管理员变化消息
     "MESSAGE_TYPE_GROUPOWNER_TRANSFER"          // = 514; //群主转移消息
);

$MGCGroupStatusType= array(
    "GROUP_STATUS_NOTINGROUP", // = 1;    // 用户不在群中
    "GROUP_STATUS_APPLYING  ", // = 2;    // 用户申请中
    "GROUP_STATUS_INGROUP   " // = 3;    // 用户已在群中
);

$MGCGroupMemberType = array(
    "GROUP_MEMBER_ROLE_NORMAL ",  // = 0;  //普通用户
    "GROUP_MEMBER_ROLE_CREATOR",  // = 1;  //群主
    "GROUP_MEMBER_ROLE_ADMIN  "  // = 2;  //管理员
);

$MGCGroupApplierType = array(
    "GROUP_APPLIER_REQUEST", // = 0; //新用户请求入群
    "GROUP_APPLIER_ACCEPT ", // = 1; //通过群成员申请
    "GROUP_APPLIER_DELETE " // = 2; //删除群成员申请
);


$MGCAdminOperType= array(
    "GROUP_ADMIN_UNSET",    // = 0; //取消群管理员身份
    "GROUP_ADMIN_SET  "    // = 1; //设置用户为群管理员身份
);

$MGCGroupTransferType = array(
    "GROUP_TRANSFER_DESIGNED", // = 1;  //转让人指定转让
    "GROUP_TRANSFER_AUTO    " // = 2;  //由系统自动选择一个群成员转让
);

//终端类型
$MGCUserType= array(
    "MGC_USER_TYPE_NORMAL	",	     // = 0;
    "MGC_USER_TYPE_PRIMARY ",      // = 1;
    "MGC_USER_TYPE_CHILD"			   // =  2;
);

$MID = array(
    1 => "MGC_MID_SERVER",              // = 1;// 服务器之间的数据包
    2 => "MGC_MID_LOGIN",               // = 2;// 登陆模块
    3 => "MGC_MID_CONVERSATION",        // = 3;// 会话模块
    4 => "MGC_MID_GROUP",               // = 4;// 群模块
    5 => "MGC_MID_MESSAGE",             // = 5;// 消息模块
    6 => "MGC_MID_P2PMSG",              // = 6;// P2P消息定义
    7 => "MGC_MID_USERINFO",            // = 7;// 用户类信息
    8 => "MGC_MID_CINFO",               // = 8;// cinfo
    9 => "MGC_MID_MONITOR",             // = 9;// 监控相关
    10 => "MGC_MID_GENERAL",             // = 10;// general
    11 => "MGC_MID_IPSERVICE",           // = 11;// ipservice
    12 => "MGC_MID_TRANSMIT",            // = 12;// socket 转发业务数据
    13 => "MGC_MID_CHATROOM",            // = 13;// 聊天室模块
    14 => "MGC_MID_SERVICE_DISPATCH",    // = 14;// 客服分配
    15 => "MGC_MID_SUBSCRIBE",           // = 15;// 订阅模块
    16 => "MGC_MID_MWP",                 // = 16;// MWP模块
    17 => "MGC_MID_BIZ",                 // = 17;// 具体业务模块
    18 => "MGC_MID_ANCIENT"             // = 18; //新老协议兼容内部使用
);

$MGC_CID = array( 
    "MGC_MID_SERVER" => $MGCServerCmdID,           
    "MGC_MID_LOGIN" => $MGCLoginCmdID,          
    "MGC_MID_CONVERSATION" => $MGCConversationCmdID,     
    "MGC_MID_GROUP" => $MGCGroupCmdID,            
    "MGC_MID_MESSAGE" => $MGCMsgCmdID,           
    "MGC_MID_P2PMSG" => $MGCP2PMsgCmdID,           
    "MGC_MID_USERINFO" => $MGCUserInfoCmdID,         
    "MGC_MID_CINFO" => $MGCCInfoCmdID,            
    "MGC_MID_MONITOR" => $MGCMonitorCmdID,          
    "MGC_MID_GENERAL" => $MGCGeneralCmdID,          
    "MGC_MID_IPSERVICE" => $MGCIpServiceCmdID,        
    "MGC_MID_TRANSMIT" => $MGCTransmitCmdID,         
    "MGC_MID_CHATROOM" => $MGCChatroomCmdID,        
    "MGC_MID_SERVICE_DISPATCH" => $MGCServiceDispatchCmdID,
    "MGC_MID_SUBSCRIBE" => $MGCSubscribeCmdID,        
    "MGC_MID_MWP" => $MGCMwpCmdID,              
    "MGC_MID_BIZ" => $MGCBizCmdID,
    "MGC_MID_ANCIENT" => $MGCAncientCmdID    
);

  if($argc < 3) {
    print "useage: mid $mid $cid \n";
    return;
  }

// function  query_mid_cid($mid, $cid
    $string_mid = $MID[$argv[1]];

    $array_cid = $MGC_CID[$string_mid];
    $string_cid = $array_cid[$argv[2]];

    print $argv[1].":".$argv[2]." -> ".$string_mid." : ".$string_cid."\n";

// }

// query_mid_cid(7, 1);

?>