package com.example.potest;

import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

public class RegisterRequest extends StringRequest {

    final static private String URL = "http://ehfkdl94.cafe24.com/UserRegister.php";
    private Map<String, String> parameters;

    public RegisterRequest(String userID,  String userPassword, String userGender, String userEmail, String userPhonenumber, Response.Listener<String> listener){
        super(Method.POST, URL, listener, null);//해당 URL에 POST방식으로 파마미터들을 전송함
        parameters = new HashMap<>();
        parameters.put("userID", userID);
        parameters.put("userPassword", userPassword);
        parameters.put("userGender", userGender);
        parameters.put("userEmail", userEmail);
        parameters.put("userPhonenumber", userPhonenumber);

    }

    @Override
    protected Map<String, String> getParams()  {
        return parameters;
    }
}