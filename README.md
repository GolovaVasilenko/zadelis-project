# zadelis-project
# Users API
Send GET request {domain_name}/users

Response:

{
    "id": 1,
    "login": "sara1",
    "email": "sara1@sara.com",
    "phone": "380975674354",
    "password": "qwerty",
    "created_at": "2020-08-09T12:15:38.000000Z",
    "updated_at": "2020-08-09T12:15:38.000000Z"
}

Send POST request {domain_name}/user/create

fields: 

"login", "email", "phone", "password"

response:

{ message: "success" } or { message: "error" }