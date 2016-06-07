<?php

$modules = array( 
    "MGC_MID_SERVER",           
    "MGC_MID_LOGIN",          
    "MGC_MID_CONVERSATION",     
    "MGC_MID_GROUP",            
    "MGC_MID_MESSAGE",          
    "MGC_MID_P2PMSG",           
    "MGC_MID_USERINFO",         
    "MGC_MID_CINFO",            
    "MGC_MID_MONITOR",          
    "MGC_MID_GENERAL",          
    "MGC_MID_IPSERVICE",        
    "MGC_MID_TRANSMIT",         
    "MGC_MID_CHATROOM",        
    "MGC_MID_SERVICE_DISPATCH",
    "MGC_MID_SUBSCRIBE",        
    "MGC_MID_MWP",              
    "MGC_MID_BIZ",				 
    "MGC_MID_ANCIENT"			 
);

$mid_server = array( 
  0 =>  "MGC_CID_SERVER_UNKNOWN",			//      = 0; // 未定义预留
  1 = "MGC_CID_SERVER_PARSE_PDU_FAIL",      //     = 1; // 逻辑服务器通知接入服务器，数据包解析出kkk错
  2 = "MGC_CID_SERVER_ACCESS_SERV_INFO",    //     = 2; // 接入服务器信息
  3 = "MGC_CID_SERVER_ONLINE_CONN_INFO",     //    = 3; // 接入服务器的连接数信息
  4 = "MGC_CID_SERVER_SERVER_REGISTER",     //     = 4; // 服务器向其他服务器注册自己的server_number
  5 = "MGC_CID_SERVER_USER_ONLINE",         //     = 5; // 用户上线
  6 = "MGC_CID_SERVER_USER_OFFLINE",        //     = 6; // 用户离线
  7 = "MGC_CID_SERVER_ONLINE_USERS_REQ",    //     = 7; // 在线用户信息请求，用于发送消息
  8 = "MGC_CID_SERVER_ONLINE_USERS_RESP",    //    = 8; // 1. 接入服务器重连到在线状态服务器后，汇报当前所有用户状态，用于重建状态服务器
  // 2. 在线用户信息请求恢复
  9 = "MGC_CID_SERVER_ONLINE_USERS_NOTIFY",		//= 9;
  11 = "MGC_CID_SERVER_STOP_SERVICE",          //   = 11; // 通知服务调用方服务即将停止
  12 = "MGC_CID_SERVER_MSG_ID_RESP",           //   = 12; // 写消息时返回消息ID
  13 = "MGC_CID_SERVER_USER_ACTION_LOG",       //   = 13; // 用户行为日志，登陆/登出/离开
  14 = "MGC_CID_SERVER_SENSITIVE_WORD_REQ",    //   = 14; // 获取敏感词请求
  15 = "MGC_CID_SERVER_SENSITIVE_WORD_RESP",    //  = 15; // 获取敏感词回复
  16 = "MGC_CID_SERVER_SERVICE_DISPATCH_LOG",   //  = 16; // 分配客服日志
  17 = "MGC_CID_SERVER_SERVICE_USER_REQ",       //  = 17; // 请求一个店铺的客服用户和默认离线分配客服信息
  18 = "MGC_CID_SERVER_SERVICE_USER_RESP",       // = 18;

  20 = "MGC_CID_SERVER_SYSTEM_USER_REQ",        //  = 20; // 请求系统推送用户列表
  21 = "MGC_CID_SERVER_SYSTEM_USER_RESP",       //  = 21;
  22 = "MGC_CID_SERVER_INSERT_SYS_MSG_REQ",     //  = 22; // 插入系统消息
  23 = "MGC_CID_SERVER_INSERT_SYS_MSG_RESP",    //  = 23;
  24 = "MGC_CID_SERVER_BROADCAST_SYS_MSG",     //   = 24; // 发送系统消息
  25 = "MGC_CID_SERVER_BATCH_MSG",             //   = 25; // 批量发消息
  26 = "MGC_CID_SERVER_BATCH_MSG_ID_RESP",     //  = 26; // 批量发消息返回批量消息ID
  27 = "MGC_CID_SERVER_USER_BADGE_REQ",         //  = 27; // 请求用户所有未读计数，包括群，消息，cinfo
  28 = "MGC_CID_SERVER_USER_BADGE_RESP",        //  = 28;
  29 = "MGC_CID_SERVER_IMG_BATCH_MSG",          //  = 29; // 批量发附带图片的消息 //add by wuhui 2015-07-23

  30 = "MGC_CID_SERVER_ONLINE_USER_CNT_REQ",     // = 30; // 用户在线人数请求
  31 = "MGC_CID_SERVER_ONLINE_USER_CNT_RESP",    // = 31;
  32 = "MGC_CID_SERVER_OFFICIAL_EMPLOYEE_REQ",  //  = 32; // 官方客服请求
  33 = "MGC_CID_SERVER_OFFICIAL_EMPLOYEE_RESP", //  = 33;
  34 = "MGC_CID_SERVER_FILTER_MSG_DATA",         // = 34; // 过滤消息数据
  35 = "MGC_CID_SERVER_GET_SYSTEM_FORBID_REQ",   // = 35; // 请求系统屏蔽用户列表请求
  36 = "MGC_CID_SERVER_GET_SYSTEM_FORBID_RESP",  // = 36; // 请求系统屏蔽用户列表回复
  37 = "MGC_CID_SERVER_UPDATE_SYSTEM_FORBID_REQ",//  = 37; // 更新系统屏蔽用户

  // @benqi; 2015-05-13
  40 = "MGC_CID_SERVER_MSG_DATA_PUSH_REQ",      //  = 40; // 消息推送请求
  41 = "MGC_CID_SERVER_MSG_DATA_PUSH_RESP",      // = 41; // 消息推送回复
  42 = "MGC_CID_SERVER_GROUP_MSG_DATA_PUSH_REQ", // = 42; // 群聊消息推送请求
  43 = "MGC_CID_SERVER_GROUP_MSG_DATA_PUSH_RESP",// = 43; // 群聊消息推送回复

  44 = "MGC_CID_SERVER_SERVICE_WELCOME_MSG_REQ", // = 44;//客服欢迎语
  45 = "MGC_CID_SERVER_SERVICE_WELCOME_MSG_RESP",//= 45;

  // @benqi; 2015-07-01
  46 = "MGC_CID_SERVER_SINGLE_SLIENT_PUSH_REQ",  // = 46;// SingleSlient推送请求
  47 = "MGC_CID_SERVER_SINGLE_SLIENT_PUSH_RESP", // = 47;// SingleSlient消息推送回复
  48 = "MGC_CID_SERVER_UMP_PUSH_REQ ",           // = 48;// Ump消息推送请求
  49 = "MGC_CID_SERVER_UMP_PUSH_RESP",           // = 49;// Ump消息推送回复
  50 = "MGC_CID_SERVER_BATCH_PUSH_REQ ",         // = 50;// Batch消息推送请求
  51 = "MGC_CID_SERVER_BATCH_PUSH_RESP",         // = 51;// Batch消息推送回复

  // @yugui; 2015-07-10
  52 = "MGC_CID_SERVER_USER_TYPE_REQ ",          // = 52; // Batch消息推送请求
  53 = "MGC_CID_SERVER_USER_TYPE_RESP ",         // = 53; // Batch消息推送回复

  // @yugui; 2015-07-13
  54 = "MGC_CID_SERVER_ANTISPAM_TRUST_USER_REQ", // = 54; // Batch消息推送请求
  55 = "MGC_CID_SERVER_ANTISPAM_TRUST_USER_RESP",  // = 55; // Batch消息推送回复

  56 = "MGC_CID_SERVER_GET_LAST_SERVICE_REQ", // = 56;    //获取最后聊天客服
  57 = "MGC_CID_SERVER_GET_LAST_SERVICE_RESP",//  = 57;

  58 = "MGC_CID_SERVER_GET_SERVICE_LIST_REQ ", //  = 58;    //获取有权限的客服ID列表
  59 = "MGC_CID_SERVER_GET_SERVICE_LIST_RESP", //  = 59;

  60 = "MGC_CID_SERVER_GET_SERVICE_LOAD_REQ",  // = 60;    //获取客服负载
  61 = "MGC_CID_SERVER_GET_SERVICE_LOAD_RESP", // = 61;

  62 = "MGC_CID_SERVER_GET_SERVICE_DISPATCH_REQ", // = 62; //获取客服分配记录缓存
  63 = "MGC_CID_SERVER_GET_SERVICE_DISPATCH_RESP",//  = 63;

  64 = "MGC_CID_SERVER_IMG_BATCH_PUSH_REQ",     //   = 64;// 附带图片Batch消息推送请求
  65 = "MGC_CID_SERVER_IMG_BATCH_PUSH_RESP",    //   = 65;// 附带图片Batch消息推送回复

  66 = "MGC_CID_SERVER_SLIENT_BROADCAST_SYS_MSG",  //  = 66; //add by tianshan; 静默推送系统消息，只通过聊天通道发送消息，不做推送通知
  67 = "MGC_CID_SERVER_FETCH_CONVERSATION_INFO_REQ", //  = 67;  //获取sessionInfo;如果不存在则创建
  68 = "MGC_CID_SERVER_FETCH_CONVERSATION_INFO_RESP", //  = 68;
  69 = "MGC_CID_SERVER_GET_CONVERSATION_INFO_REQ", //  = 69; //获取session信息
  70 = "MGC_CID_SERVER_GET_CONVERSATION_INFO_RESP", //  = 70;

  71 = "MGC_CID_SERVER_GROUP_DEL_REQ",//  = 71;     //删除群会话
  72 = "MGC_CID_SERVER_GROUP_DEL_RESP", // = 72;

  77 = "MGC_CID_SERVER_GET_CONVERSATION_REQ",   //  = 77; //内部使用，根据from_id和to_id获取会话
  78 = "MGC_CID_SERVER_GET_SSSION_RESP",   //  = 78;
  79 = "MGC_CID_SERVER_UPDATE_CONVERSATION_REQ", //  = 79;
  80 = "MGC_CID_SERVER_UPDATE_CONVERSATION_RESP", // = 80;
  83 = "MGC_CID_SERVER_FETCH_CONVERSATION_CACHE_REQ", // = 83;
  84 = "MGC_CID_SERVER_FETCH_CONVERSATION_CACHE_RESP",//  = 84;
  85 = "MGC_CID_SERVER_CACHE_MESSAGE", // = 85;

  86 = "MGC_CID_SERVER_DC_INSERT_REQ", // = 86;	// insert
  87 = "MGC_CID_SERVER_DC_INSERT_RESP",//  = 87;

  88 = "MGC_CID_SERVER_DC_UPDATE_REQ", // = 88;	// update
  89 = "MGC_CID_SERVER_DC_UPDATE_RESP", // = 89;

  90 = "MGC_CID_SERVER_DC_SELECT_REQ", // = 90;	// select
  91 = "MGC_CID_SERVER_DC_SELECT_RESP",//  = 91;

  92 = "MGC_CID_SERVER_DC_DELETE_REQ", // = 92;	// delete
  93 = "MGC_CID_SERVER_DC_DELETE_RESP", // = 93;

  94 = "MGC_CID_SERVER_DC_INCR_REQ", // = 94;	// incr
  95 = "MGC_CID_SERVER_DC_INCR_RESP", // = 95;

  96 = "MGC_CID_SERVER_DC_COUNT_REQ", // = 96;	// count
  97 = "MGC_CID_SERVER_DC_COUNT_RESP", // = 97;

  98 = "MGC_CID_SERVER_DC_BATCH_SELECT_REQ", // = 98;	// batch select
  99 = "MGC_CID_SERVER_DC_BATCH_SELECT_RESP", // = 99;

  100 = "MGC_CID_SERVER_USER_STATUS_BROADCAST_NOTIFY", // = 100; //用户在线状态广播
  101 = "MGC_CID_SERVER_ALL_USERS_STATUS_REQ", //         = 101; //所有在线用户信息请求

  //access_server login loadbalancer req
  102 = "MGC_CID_SERVER_LOGIN_LB_SERV_REQ", //= 102;
  103 = "MGC_CID_SERVER_LOGIN_LB_SERV_RESP", // = 103;

  //access_server report loadbalancer req
  104 = "MGC_CID_SERVER_REPORT_LB_SERV_REQ", // = 104;
  105 = "MGC_CID_SERVER_REPORT_LB_SERV_RESP", // = 105;

  //user primary info
  107 = "MGC_CID_SERVER_USER_PRIMARY_INFO_REQ", // = 107;
  108 = "MGC_CID_SERVER_USER_PRIMARY_INFO_RESP", // = 108;

  //appserver userinfo
  109 = "MGC_CID_SERVER_APPSERVER_USERINFO_REQ", // = 109;
  110 = "MGC_CID_SERVER_APPSERVER_USERINFO_RESP", // = 110;

  //appsever shopid
  111 = "MGC_CID_SERVER_APPSERVER_SHOPID_REQ", // = 111;
  112 = "MGC_CID_SERVER_APPSERVER_SHOPID_RESP", // = 112;

  //appserver shopemployee id
  113 = "MGC_CID_SERVER_APPSERVER_SHOPEMPLOYEEID_REQ", // = 113;

  114 = "MGC_CID_SERVER_APPSERVER_SHOPEMPLOYEEID_RESP", // = 114;

  //appserver shopemployee
  115 = "MGC_CID_SERVER_APPSERVER_SHOPEMPLOYEE_REQ", // = 115;
  116 = "MGC_CID_SERVER_APPSERVER_SHOPEMPLOYEE_RESP", // = 116;

  //push
  130 = "MGC_CID_SERVER_PUSH_NOTIFY", // = 130;						// 消息推送到push server的协议
  131 = "MGC_CID_SERVER_OFFICIAL_PUSH_REQ", // = 131;				// 官方推送的入口协议类型
  132 = "MGC_CID_SERVER_OFFICIAL_PUSH_MSG_SEND_REQ", // = 132;		// 推送消息同api server到msg server的处理
  133 = "MGC_CID_SERVER_OFFICIAL_PUSH_MSG_SEND_RESP", // = 133;		// 消息推送的回复，msg server到api server的

  //api server
  136 = "MGC_CID_SERVER_USERS_BADGE_REQ", // = 136;					// 角标操作的协议
  137 = "MGC_CID_SERVER_USERS_BADGE_RESP", // = 137;
  138 = "MGC_CID_SERVER_LOGGING_INFO", // = 138;                    // BI数据上报，转送给general_server

  //msg filter
  150 = "MGC_CID_SERVER_MSG_FILTER_PUSH_MSG_SEND_REQ", // = 150;  // msg server 到 msg filter 的消息
  151 = "MGC_CID_SERVER_MSG_FILTER_PUSH_MSG_SEND_RESP", // = 151; // msg filter 到 msg server 的消息响应

  //subscribe
  180 = "MGC_CID_SERVER_SUBSCRIBE_GET_WHO_SUBSCRIBED_MY_STATE_REQ", // = 180;
  181 = "MGC_CID_SERVER_SUBSCRIBE_GET_WHO_SUBSCRIBED_MY_STATE_RESP", // = 181;
	);


main() {

}


?>