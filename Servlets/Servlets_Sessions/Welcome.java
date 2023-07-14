import java.io.*;
import javax.servlet.*;
import java.servlet.http.*;

public class Welcome extends HttpServlet{
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        HttpSession session = request.getSession();
        String user = (String)session.getAttribute("user");
        out.println("Hello " + user);

    }
}