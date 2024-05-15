package com.example.actions;

import com.opensymphony.xwork2.ActionSupport;
import org.apache.struts2.convention.annotation.Action;
import org.apache.struts2.convention.annotation.Result;

@Action(value = "/hello", results = {@Result(name = "success", location = "/hello.jsp")})
public class HelloWorldAction extends ActionSupport {
    private String message = "Hello World!";

    public String execute() {
        return SUCCESS;
    }

    public String getMessage() {
        return message;
    }
}
