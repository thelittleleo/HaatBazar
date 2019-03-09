<?php

	class USER
	{
	    public $db;
	 
	    function __construct($con)
	    {
	      $this->db = $con;
	    }

	    public function addUser($user_mobile,$user_name,$user_city,$user_age,$user_sex,$user_address)
		{
				
			$st = $this->db->prepare("INSERT INTO user_table (user_mobile,user_name,user_city,user_age,user_sex,user_address) VALUES (:user_mobile,:user_name,:user_city,:user_age,:user_sex,:user_address)");
			$st->bindParam(':user_mobile',$user_mobile);
			
			$st->bindParam(':user_name',$user_name);
			$st->bindParam(':user_city',$user_city);
			$st->bindParam(':user_age',$user_age);
			$st->bindParam(':user_sex',$user_sex);
			$st->bindParam(':user_address',$user_address);
			$st->execute();
			$id=$this->db->lastInsertId();
			return $id;
		}

		public function checkUser($user_mobile)
		{
			$st = $this->db->prepare("SELECT * FROM user_table WHERE user_mobile='$user_mobile'");
			$data = $st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function checkOffer($id)
		{
			$st = $this->db->prepare("SELECT * FROM offer_table WHERE offer_product_id='$id'");
			$data = $st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function checkCustomer($user_mobile)
		{
			$st = $this->db->prepare("SELECT * FROM customer_table WHERE user_mobile='$user_mobile'");
			$data = $st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function checkUserType($user_mobile,$user_pass)
		{
			$st = $this->db->prepare("SELECT * FROM login_table WHERE login_mobile='$user_mobile' AND login_password='$user_pass'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getAdmin($user_mobile)
		{
			$st = $this->db->prepare("SELECT * FROM admin_table WHERE admin_mobile='$user_mobile'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getCustomer($user_mobile)
		{
			$st = $this->db->prepare("SELECT * FROM customer_table WHERE customer_mobile='$user_mobile'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getAddsSettings()
		{
			$st = $this->db->prepare("SELECT * FROM add_settings_table");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getAddsAdmin()
		{
			$st = $this->db->prepare("SELECT * FROM add_table WHERE add_ac!=''");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getAddRequestById($add_request_id)
		{
			$st = $this->db->prepare("SELECT * FROM add_table WHERE add_request_id='$add_request_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getAddSettingsById($id)
		{
			$st = $this->db->prepare("SELECT * FROM add_settings_table WHERE add_id='$id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getUser($user_mobile)
		{
			$st = $this->db->prepare("SELECT * FROM user_table WHERE user_mobile='$user_mobile'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getAddById($user_mobile)
		{
			$st = $this->db->prepare("SELECT * FROM add_settings_table WHERE add_id='$user_mobile'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getAddByTypeCustomer($user_mobile)
		{
			$st = $this->db->prepare("SELECT * FROM add_settings_table WHERE add_name='$user_mobile'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getAddsByCustomer($add_customer_id)
		{
			$st = $this->db->prepare("SELECT * FROM add_table WHERE add_customer_id='$add_customer_id' AND add_ac=''");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getAddRequestsAdmin()
		{
			$st = $this->db->prepare("SELECT * FROM add_table WHERE add_ac=''");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getAddsByCustomerAc($add_customer_id)
		{
			$st = $this->db->prepare("SELECT * FROM add_table WHERE add_customer_id='$add_customer_id' AND add_ac!=''");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getAllShop()
		{
			$st = $this->db->prepare("SELECT * FROM shop_table");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getAllOffers()
		{
			$st = $this->db->prepare("SELECT * FROM offer_table");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getAllUser()
		{
			$st = $this->db->prepare("SELECT * FROM user_table");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getAllCustomer()
		{
			$st = $this->db->prepare("SELECT * FROM customer_table");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getShopById($shop_id)
		{
			$st = $this->db->prepare("SELECT * FROM shop_table WHERE shop_id='$shop_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getShopSubscription($shop_id)
		{
			$st = $this->db->prepare("SELECT * FROM subscription_table WHERE subscription_shop_id='$shop_id' ORDER BY subscription_id DESC");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}
		public function getShopLastSubscription($shop_id)
		{
			$st = $this->db->prepare("SELECT * FROM subscription_table WHERE subscription_shop_id='$shop_id' ORDER BY subscription_id DESC");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getOffersById($shop_id)
		{
			$st = $this->db->prepare("SELECT * FROM offer_table WHERE offer_shop_id='$shop_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getProductById($product_id)
		{
			$st = $this->db->prepare("SELECT * FROM product_table WHERE product_id='$product_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getProductsById($shop_id)
		{
			$st = $this->db->prepare("SELECT * FROM product_table WHERE product_shop_id='$shop_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getOfferByShop($shop_id)
		{
			$st = $this->db->prepare("SELECT * FROM offer_table WHERE offer_shop_id='$shop_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}
		public function getOfferById($offer_id)
		{
			$st = $this->db->prepare("SELECT * FROM offer_table WHERE offer_id='$offer_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getCustomerById($user_id)
		{
			$st = $this->db->prepare("SELECT * FROM customer_table WHERE customer_id='$user_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function getShopsByCustomerId($user_id)
		{
			$st = $this->db->prepare("SELECT * FROM shop_table WHERE shop_customer_id='$user_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getProductByShop($shop_id)
		{
			$st = $this->db->prepare("SELECT * FROM product_table WHERE product_shop_id='$shop_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetchAll();
			return $data;
		}

		public function getShopByNameCustomer($add_shop,$add_customer_id)
		{
			$st = $this->db->prepare("SELECT * FROM shop_table WHERE shop_name='$add_shop' AND shop_customer_id='$add_customer_id'");
			$st->setFetchMode(PDO::FETCH_ASSOC);
			$st->execute();
			$data=$st->fetch();
			return $data;
		}

		public function addShopOldCustomer($shop_name,$shop_brand,$shop_phone,$shop_area,$shop_type,$shop_start_date,$shop_customer_id)
		{
				
			$st = $this->db->prepare("INSERT INTO shop_table (shop_name,shop_brand,shop_phone,shop_area,shop_type,shop_customer_id,shop_start_date) VALUES (:shop_name,:shop_brand,:shop_phone,:shop_area,:shop_type,:shop_customer_id,:shop_start_date)");
			$st->bindParam(':shop_name',$shop_name);
			$st->bindParam(':shop_brand',$shop_brand);
			$st->bindParam(':shop_phone',$shop_phone);
			$st->bindParam(':shop_area',$shop_area);
			$st->bindParam(':shop_type',$shop_type);
			$st->bindParam(':shop_customer_id',$shop_customer_id);
			$st->bindParam(':shop_start_date',$shop_start_date);
			$st->execute();
			$id=$this->db->lastInsertId();
			return $id;
		}

		public function addPayment($subscription_shop_id,$subscription_cost,$subscription_date,$subscription_period)
		{
				
			$st = $this->db->prepare("INSERT INTO subscription_table (subscription_shop_id,subscription_cost,subscription_date,subscription_period) VALUES (:shop_name,:shop_brand,:shop_phone,:shop_area)");
			$st->bindParam(':shop_name',$subscription_shop_id);
			$st->bindParam(':shop_brand',$subscription_cost);
			$st->bindParam(':shop_phone',$subscription_date);
			$st->bindParam(':shop_area',$subscription_period);
			
			$st->execute();
			$id=$this->db->lastInsertId();
			return $id;
		}

		public function addRequestOffer($add_id,$add_cost,$add_start_date,$add_end_date,$add_shop_id,$add_customer_id,$user_pic,$add_title)
		{
				
			$st = $this->db->prepare("INSERT INTO add_table (add_id,add_cost,add_start_date,add_end_date,add_shop_id,add_customer_id,add_image,add_title) VALUES (:add_id,:add_cost,:add_start_date,:add_end_date,:add_shop_id,:add_customer_id,:add_image,:add_title)");
			$st->bindParam(':add_id',$add_id);
			$st->bindParam(':add_cost',$add_cost);
			$st->bindParam(':add_start_date',$add_start_date);
			$st->bindParam(':add_end_date',$add_end_date);
			$st->bindParam(':add_shop_id',$add_shop_id);
			$st->bindParam(':add_customer_id',$add_customer_id);
			$st->bindParam(':add_image',$user_pic);
			$st->bindParam(':add_title',$add_title);
			
			$st->execute();
			$id=$this->db->lastInsertId();
			return $id;
		}

		public function addCustomer($user_mobile,$user_name,$user_city,$user_age,$user_sex,$user_address)
		{
				
			$st = $this->db->prepare("INSERT INTO customer_table (customer_mobile,customer_name,customer_age,customer_city,customer_address,customer_sex) VALUES (:customer_mobile,:customer_name,:customer_age,:customer_city,:customer_address,:customer_sex)");
			$st->bindParam(':customer_mobile',$user_mobile);
			$st->bindParam(':customer_name',$user_name);
			$st->bindParam(':customer_age',$user_age);
			$st->bindParam(':customer_city',$user_city);
			$st->bindParam(':customer_address',$user_address);
			$st->bindParam(':customer_sex',$user_sex);
			$st->execute();
			$id=$this->db->lastInsertId();
			return $id;
		}

		public function addOffer($offer_shop_id,$product_id)
		{
				
			$st = $this->db->prepare("INSERT INTO offer_table (offer_shop_id,offer_product_id) VALUES (:offer_shop_id,:offer_product_id)");
			$st->bindParam(':offer_shop_id',$offer_shop_id);
			$st->bindParam(':offer_product_id',$product_id);
			 
			$st->execute();
			$id=$this->db->lastInsertId();
			return $id;
		}


		public function addProduct($product_name,$product_brand,$product_pack_size,$user_pic,$product_price,$product_place,$product_type,$product_quantity,$product_shop_id)
		{
				
			$st = $this->db->prepare("INSERT INTO product_table (product_name,product_brand,product_pack_size,product_image,product_price,product_place,product_type,product_quantity,product_shop_id) VALUES (:product_name,:product_brand,:product_pack_size,:product_image,:product_price,:product_place,:product_type,:product_quantity,:product_shop_id)");
			$st->bindParam(':product_name',$product_name);
			$st->bindParam(':product_brand',$product_brand);
			$st->bindParam(':product_pack_size',$product_pack_size);
			$st->bindParam(':product_image',$user_pic);
			$st->bindParam(':product_price',$product_price);
			$st->bindParam(':product_place',$product_place);
			$st->bindParam(':product_type',$product_type);
			$st->bindParam(':product_quantity',$product_quantity);
			$st->bindParam(':product_shop_id',$product_shop_id);
			$st->execute();
			$id=$this->db->lastInsertId();
			return $id;
		}

		public function addLoginCustomer($user_mobile,$user_pass,$user_type)
		{
				
			$st = $this->db->prepare("INSERT INTO login_table (login_mobile,login_password,login_type) VALUES (:login_mobile,:login_pass,:login_type)");
			$st->bindParam(':login_mobile',$user_mobile);
			$st->bindParam(':login_pass',$user_pass);
			$st->bindParam(':login_type',$user_type);
			
			$st->execute();
			$id=$this->db->lastInsertId();
			return $id;
		}

		public function editImageCustomer($id,$user_pic)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE customer_table SET customer_image=:customer_image WHERE customer_id=:customer_id");
				$select->bindParam(':customer_image',$user_pic);
				$select->bindParam(':customer_id',$id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editShop($shop_name,$shop_brand,$shop_phone,$shop_area,$shop_type,$shop_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE shop_table SET shop_name=:shop_name,shop_brand=:shop_brand,shop_phone=:shop_phone,shop_area=:shop_area,shop_type=:shop_type WHERE shop_id=:customer_id");
				$select->bindParam(':shop_name',$shop_name);
				$select->bindParam(':shop_brand',$shop_brand);
				$select->bindParam(':shop_phone',$shop_phone);
				$select->bindParam(':shop_area',$shop_area);
				$select->bindParam(':shop_type',$shop_type);
				$select->bindParam(':customer_id',$shop_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editRequestAddImage($id,$user_pic)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE add_table SET add_image=:customer_image WHERE add_request_id=:customer_id");
				$select->bindParam(':customer_image',$user_pic);
				$select->bindParam(':customer_id',$id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function shopMessage($shop_message,$shop_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE shop_table SET shop_message=:customer_image WHERE shop_id=:customer_id");
				$select->bindParam(':customer_image',$shop_message);
				$select->bindParam(':customer_id',$shop_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editAddRequest($add_id,$add_cost,$add_start_date,$add_end_date,$add_shop_id,$add_title,$add_request_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE add_table SET add_id=:add_id, add_cost=:add_cost, add_start_date=:add_start_date, add_end_date=:add_end_date, add_shop_id=:add_shop_id, add_title=:add_title WHERE add_request_id=:customer_id");
				$select->bindParam(':add_id',$add_id);
				$select->bindParam(':add_cost',$add_cost);
				$select->bindParam(':add_start_date',$add_start_date);
				$select->bindParam(':add_end_date',$add_end_date);
				$select->bindParam(':add_shop_id',$add_shop_id);
				$select->bindParam(':add_title',$add_title);
				$select->bindParam(':customer_id',$add_request_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editAddSettings($add_cost,$add_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE add_settings_table SET add_cost=:customer_image WHERE add_id=:customer_id");
				$select->bindParam(':customer_image',$add_cost);
				$select->bindParam(':customer_id',$add_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editImageShop($shop_id,$user_pic)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE shop_table SET shop_image=:customer_image WHERE shop_id=:customer_id");
				$select->bindParam(':customer_image',$user_pic);
				$select->bindParam(':customer_id',$shop_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editLogoShop($shop_id,$user_pic)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE shop_table SET shop_logo=:customer_image WHERE shop_id=:customer_id");
				$select->bindParam(':customer_image',$user_pic);
				$select->bindParam(':customer_id',$shop_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function updateOffer($offer_details,$offer_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE offer_table SET offer_details=:customer_image WHERE offer_id=:customer_id");
				$select->bindParam(':customer_image',$offer_details);
				$select->bindParam(':customer_id',$offer_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editPasswordAdmin($pass,$admin_mobile)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE login_table SET login_password=:login_password WHERE login_mobile=:customer_id");
				$select->bindParam(':login_password',$pass);
				$select->bindParam(':customer_id',$admin_mobile);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editImageproduct($product_id,$user_pic)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE product_table SET product_image=:customer_image WHERE product_id=:customer_id");
				$select->bindParam(':customer_image',$user_pic);
				$select->bindParam(':customer_id',$product_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function acceptRequestAdd($add_ac,$add_request_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE add_table SET add_ac=:customer_image WHERE add_request_id=:customer_id");
				$select->bindParam(':customer_image',$add_ac);
				$select->bindParam(':customer_id',$add_request_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editImageUser($id,$user_pic)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE user_table SET user_image=:user_image WHERE user_id=:customer_id");
				$select->bindParam(':user_image',$user_pic);
				$select->bindParam(':customer_id',$id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function shopOk($shop_status,$subscription_shop_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE shop_table SET shop_status=:user_image WHERE shop_id=:customer_id");
				$select->bindParam(':user_image',$shop_status);
				$select->bindParam(':customer_id',$subscription_shop_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		

		public function editProduct($product_name,$product_brand,$product_pack_size,$product_price,$product_place,$product_type,$product_quantity,$product_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE product_table SET product_name=:product_name, product_brand=:product_brand, product_pack_size=:product_pack_size, product_price=:product_price, product_place=:product_place, product_type=:product_type, product_quantity=:product_quantity WHERE product_id=:customer_id");
				$select->bindParam(':product_name',$product_name);
				$select->bindParam(':product_brand',$product_brand);
				$select->bindParam(':product_pack_size',$product_pack_size);
				$select->bindParam(':product_price',$product_price);
				$select->bindParam(':product_place',$product_place);
				$select->bindParam(':product_type',$product_type);
				$select->bindParam(':product_quantity',$product_quantity);
				$select->bindParam(':customer_id',$product_id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editCustomerInfo($customer_name,$customer_city,$customer_sex,$customer_age,$customer_address,$id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE customer_table SET customer_name=:customer_name, customer_city=:customer_city, customer_sex=:customer_sex, customer_age=:customer_age, customer_address=:customer_address WHERE customer_id=:customer_id");
				$select->bindParam(':customer_name',$customer_name);
				$select->bindParam(':customer_city',$customer_city);
				$select->bindParam(':customer_sex',$customer_sex);
				$select->bindParam(':customer_age',$customer_age);
				$select->bindParam(':customer_address',$customer_address);
				$select->bindParam(':customer_id',$id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editUserInfo($customer_name,$customer_city,$customer_sex,$customer_age,$customer_address,$id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE user_table SET user_name=:customer_name, user_city=:customer_city, user_sex=:customer_sex, user_age=:customer_age, user_address=:customer_address WHERE user_id=:customer_id");
				$select->bindParam(':customer_name',$customer_name);
				$select->bindParam(':customer_city',$customer_city);
				$select->bindParam(':customer_sex',$customer_sex);
				$select->bindParam(':customer_age',$customer_age);
				$select->bindParam(':customer_address',$customer_address);
				$select->bindParam(':customer_id',$id);
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function deleteProduct($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM product_table WHERE product_id=:id");
				$select->bindParam(':id',$id);
				$select->execute();
				return true;
				 	
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function deleteSubscriptionAdmin($shop_id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM subscription_table WHERE subscription_id=:id");
				$select->bindParam(':id',$shop_id);
				$select->execute();
				return true;
				 	
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function deleteAddRequest($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM add_table WHERE add_request_id=:id");
				$select->bindParam(':id',$id);
				$select->execute();
				return true;
				 	
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function deleteUser($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM user_table WHERE user_id=:id");
				$select->bindParam(':id',$id);
				$select->execute();
				return true;
				 	
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function deleteCustomer($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM customer_table WHERE customer_id=:id");
				$select->bindParam(':id',$id);
				$select->execute();
				return true;
				 	
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function deleteOffer($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM offer_table WHERE offer_id=:id");
				$select->bindParam(':id',$id);
				$select->execute();
				return true;
				 	
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function deleteOfferProduct($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM offer_table WHERE offer_product_id=:id");
				$select->bindParam(':id',$id);
				$select->execute();
				return true;
				 	
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	    







	


			
}		
?>    