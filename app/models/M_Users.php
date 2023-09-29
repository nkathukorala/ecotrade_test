<?PHP
    class M_Users{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }
        //Register the user
        public function register($data){
            $this->db->query('INSERT INTO General_User(username,email,password) VALUES(:username, :email, :password)');          
            $this->db->bind(':username',$data['username']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':password',$data['password']);  
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        // Find the user
        public function findUserByEmail($email){
            $this->db->query('SELECT * FROM General_User WHERE email =:email');
            $this->db->bind(':email',$email);

            $row = $this->db->single();

            if($this->db->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }
        
    }

?>