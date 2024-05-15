<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Anurag.jsp</title>
</head>
<body>

    <%-- This is a JSP page demonstrating the use of directives, comments, and scripting elements --%>

    <%@ include file="header.jsp" %>

    <% int num1 = 10; %>
    <% int num2 = 5; %>

    <% int sum = num1 + num2; %>
    <% int difference = num1 - num2; %>

    <p>Sum: <%= sum %></p>
    <p>Difference: <%= difference %></p>

    <% if (sum > 15) { %>
        <p>Sum is greater than 15.</p>
    <% } else { %>
        <p>Sum is not greater than 15.</p>
    <% } %>

    <%@ page contentType="text/plain" %>
    <p>This text will be displayed as plain text.</p>

    <%@ include file="footer.jsp" %>

</body>
</html>
