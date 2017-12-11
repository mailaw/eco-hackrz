var User = function(user_json) {
    this.user_id = user_json.user_id;
    this.username = user_json.username;
    this.password = user_json.password;
    this.first_name = user_json.first_name;
    this.last_name = user_json.last_name;
    this.state = user_json.state;
};