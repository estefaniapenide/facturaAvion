<?php

$lang = array(
	// payment gateways
	'merchant_2checkout'					=> '2Checkout',
	'merchant_authorize_net'				=> 'Authorize.Net AIM',
	'merchant_authorize_net_sim'			=> 'Authorize.Net SIM',
	'merchant_buckaroo'						=> 'Buckaroo',
	'merchant_cardsave'						=> 'Cardsave',
	'merchant_dps_pxpay'					=> 'DPS PaymentExpress PxPay',
	'merchant_dps_pxpost'					=> 'DPS PaymentExpress PxPost',
	'merchant_dummy'						=> 'Dummy',
	'merchant_eway'							=> 'eWay Hosted',
	'merchant_eway_shared'					=> 'eWay Shared',
	'merchant_eway_shared_uk'				=> 'eWay Shared (UK)',
	'merchant_ideal'						=> 'iDEAL',
	'merchant_inipay'						=> 'INIpay',
	'merchant_gocardless'					=> 'GoCardless',
	'merchant_manual'						=> 'คู่มือการใช้',
	'merchant_mollie'						=> 'Mollie',
	'merchant_netaxept'						=> 'Nets Netaxept',
	'merchant_ogone_directlink'				=> 'Ogone DirectLink',
	'merchant_payflow_pro'					=> 'Payflow Pro',
	'merchant_paymate'						=> 'Paymate',
	'merchant_paypal_express'				=> 'PayPal Express',
	'merchant_paypal_pro'					=> 'PayPal Pro',
	'merchant_rabo_omnikassa'				=> 'Rabo OmniKassa',
	'merchant_sagepay_direct'				=> 'Sagepay Direct',
	'merchant_sagepay_server'				=> 'Sagepay Server',
	'merchant_stripe'						=> 'Stripe',
	'merchant_webteh_direct'				=> 'Webteh Direct',
	'merchant_worldpay'						=> 'WorldPay',

	// payment gateway settings
	'merchant_api_login_id'					=> 'ชื่อผู้ใช้งาน API',
	'merchant_transaction_key'				=> 'คีย์ธุรกรรม',
	'merchant_test_mode'					=> 'โหมดทดสอบ',
	'merchant_developer_mode'				=> 'โหมดสำหรับนักพัฒนา',
	'merchant_simulator_mode'				=> 'โหมดการจำลอง',
	'merchant_user_id'						=> 'ID ผู้ใช้',
	'merchant_app_id'						=> 'ID ของแอพ',
	'merchant_psp_id'						=> 'PSP ID',
	'merchant_api_key'						=> 'คีย์ของ API',
	'merchant_key'							=> 'คีย์',
	'merchant_key_version'					=> 'คีย์รุ่น',
	'merchant_username'						=> 'ชื่อผู้ใช้',
	'merchant_vendor'						=> 'ผู้จัดจำหน่าย',
	'merchant_partner_id'					=> 'รหัสของคู่ค้า',
	'merchant_password'						=> 'รหัสผ่าน',
	'merchant_signature'					=> 'ลายเซ็น',
	'merchant_customer_id'					=> 'ID ของลูกค้า',
	'merchant_merchant_id'					=> 'ID ร้านค้า',
	'merchant_account_no'					=> 'เลขที่บัญชี',
	'merchant_installation_id'				=> 'ID การติดตั้ง',
	'merchant_website_key'					=> 'คีย์เว็บไซต์',
	'merchant_secret_word'					=> 'รหัสลับ',
	'merchant_secret'						=> 'รหัสความปลอดภัย',
	'merchant_app_secret'					=> 'รหัสลับของ App',
	'merchant_secret_key'					=> 'คีย์ลับ',
	'merchant_token'						=> 'Token',
	'merchant_access_token'					=> 'โทเค็นการเข้าถึง',
	'merchant_payment_response_password'	=> 'Payment response password',
	'merchant_company_name'					=> 'ชื่อบริษัท',
	'merchant_company_logo'					=> 'โลโก้บริษัท',
	'merchant_page_title'					=> 'หน้าชื่อเรื่อง',
	'merchant_page_banner'					=> 'แบนเนอร์บนเพจ',
	'merchant_page_description'				=> 'คำอธิบายหน้า',
	'merchant_page_footer'					=> 'ส่วนท้ายของหน้า',
	'merchant_enable_token_billing'			=> 'เก็บรายละเอียดบัตรสำหรับโทเค็นเรียกเก็บเงิน',
	'merchant_paypal_email'					=> 'อีเมลของบัญชี PayPal',
	'merchant_acquirer_url'					=> 'Acquirer URL',
	'merchant_public_key_path'				=> 'Public Key Server Path',
	'merchant_private_key_path'				=> 'Private Key Server Path',
	'merchant_private_key_password'			=> 'Private Key Password',
	'merchant_solution_type'				=> 'ต้องใช้บัญชี PayPal',
	'merchant_landing_page'					=> 'แท็บการชำระเงินที่เลือก',
	'merchant_solution_type_mark'			=> 'ต้องใช้บัญชี PayPal',
	'merchant_solution_type_sole'			=> 'บัญชี PayPal หรือไม่ก็ได้',
	'merchant_landing_page_billing'			=> 'ผู้ชำระเงิน / สร้างบัญชี',
	'merchant_landing_page_login'			=> 'เข้าสู่ระบบบัญชี PayPal',

	// payment gateway fields
	'merchant_card_type'					=> 'ประเภทบัตร',
	'merchant_card_no'						=> 'หมายเลขบัตร',
	'merchant_name'							=> 'ชื่อ',
	'merchant_first_name'					=> 'ชื่อ',
	'merchant_last_name'					=> 'นามสกุล',
	'merchant_card_issue'					=> 'Card Issue Number',
	'merchant_exp_month'					=> 'เดือนที่หมดอายุ',
	'merchant_exp_year'						=> 'ปีหมดอายุ',
	'merchant_start_month'					=> 'เดือนเริ่มต้น',
	'merchant_start_year'					=> 'เริ่มต้นปี',
	'merchant_csc'							=> 'CSC',
	'merchant_issuer'						=> 'ออกโดย',

	// status/error messages
	'merchant_insecure_connection'			=> 'รายละเอียดบัตรต้องถูกส่งผ่านการเชื่อมต่อที่ปลอดภัย',
	'merchant_required'						=> 'ต้องระบุฟิลด์ %s',
	'merchant_invalid_card_no'				=> 'หมายเลขบัตรไม่ถูกต้อง',
	'merchant_card_expired'					=> 'บัตรหมดอายุ',
	'merchant_invalid_status'				=> 'สถานะการชำระเงินไม่ถูกต้อง',
	'merchant_invalid_method'				=> 'วิธีที่ไม่สนับสนุนเกตเวย์นี้',
	'merchant_invalid_response'				=> 'การตอบสนองที่ไม่ถูกต้องจากเกตเวย์การชำระเงิน',
	'merchant_payment_failed'				=> 'ชำระเงินล้มเหลว โปรดลองอีกครั้ง',
	'merchant_payment_redirect'				=> 'กรุณารอขณะที่เราเปลี่ยนเส้นทางคุณไปยังหน้าชำระเงิน...',
	'merchant_3dauth_redirect'				=> 'กรุณารอขณะที่เราเปลี่ยนเส้นทางคุณไปออกบัตรรับรองความถูกต้อง...'
);

/* End of file ./language/english/merchant_lang.php */