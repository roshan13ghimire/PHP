import java.io.*;
import javax.servlet.*;
import java.servlet.http.*;

public class Validate extends HttpServlet{
    public void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
        response.setContentType("text/html");
        String user = request.getParameter("user");
        String pass = request.getParameter("pass");

        if (pass.equals("1234"){
          // creating a session
          HttpSession session = request.getSession();
          session.setAttribute("user",user);
          response.sendRedirect("Welcome");

        })

    }
}