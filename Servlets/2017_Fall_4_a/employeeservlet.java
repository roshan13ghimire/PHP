import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class employeeservlet extends HttpServlet {
    
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        // Retrieve the values from the request parameters
        String employee = request.getParameter("employee");
        String number = request.getParameter("number");
        
        // Set the response content type
        response.setContentType("text/html");
        
        // Create a PrintWriter to write the response
        PrintWriter out = response.getWriter();
        
        // Display the retrieved values
        out.println("<h1>Employee Information</h1>");
        out.println("<p>Employee: " + employee + "</p>");
        out.println("<p>Number: " + number + "</p>");
    }
}
