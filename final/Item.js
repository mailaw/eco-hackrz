var Item = function(item_json) {
    this.item_id = item_json.item_id;
    this.user_id = item_json.user_id;
    this.waste = item_json.waste;
    this.transport = item_json.transport;
    this.cultivation = item_json.cultivation;
    this.resources = item_json.resources;
    this.p_action = item_json.p_action;
    this.n_action = item_json.n_action;
    this.date_input = item_json.date_input;
    this.notes = item_json.notes;
};
