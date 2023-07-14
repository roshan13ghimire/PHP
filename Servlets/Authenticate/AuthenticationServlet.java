import java.io.*;
import java.sql.*;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class AuthenticationServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;
    
    // MySQL database connection details
    private static final String DB_URL = "jdbc:mysql://192.168.10.20:3306/mydatabase";
    private static final String DB_USERNAME = "admin";
    private static final String DB_PASSWORD = "pass";
    
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        // Get the username and password from the request parameters
        String username = request.getParameter("username");
        String password = request.getParameter("password");
        
        // Authenticate the user
        boolean isAuthenticated = authenticateUser(username, password);
        
        // Set the response content type
        response.setContentType("text/html");
        
        // Create a PrintWriter to write the response
        PrintWriter out = response.getWriter();
        
        // Display the authentication result
        if (isAuthenticated) {
            out.println("<h1>Authentication Successful</h1>");
        } else {
            out.println("<h1>Authentication Failed</h1>");
        }
    }
    
    private boolean authenticateUser(String username, String password) {
        try {
            // Establish a connection to the MySQL database
            Connection connection = DriverManager.getConnection(DB_URL, DB_USERNAME, DB_PASSWORD);
            
            // Create a prepared statement to query the database for the user
            String query = "SELECT * FROM users WHERE username = ? AND password = ?";
            PreparedStatement statement = connection.prepareStatement(query);
            statement.setString(1, username);
            statement.setString(2, password);
            
            // Execute the query
            ResultSet resultSet = statement.executeQuery();
            
            // Check if the query returned any results
            if (resultSet.next()) {
                // User exists in the database
                return true;
            } else {
                // User does not exist in the database
                return false;
            }
            
        } catch (SQLException e) {
            // Handle any errors that occurred during the authentication process
            e.printStackTrace();
        }
        
        // Return false by default if an exception occurred
        return false;
    }
}
