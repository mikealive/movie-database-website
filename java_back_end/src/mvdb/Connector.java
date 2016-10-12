package mvdb;
import java.sql.*;

public class Connector {
	public Connection con;
	public Statement stmt;
	public Connector() throws Exception {
		try{
		 	String userName = "smalltigerson";
	   		String password = "19941119";
	        	String url = "jdbc:mysql://huzi.cdm7hy0hb9km.us-west-2.rds.amazonaws.com:3306/huzi";
		        Class.forName ("com.mysql.jdbc.Driver").newInstance ();
        		con = DriverManager.getConnection (url, userName, password);

			//DriverManager.registerDriver (new oracle.jdbc.driver.OracleDriver());
        	//stmt=con.createStatement(ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
			stmt = con.createStatement();
			//stmt=con.createStatement(ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
        } catch(Exception e) {
			System.err.println("Unable to open mysql jdbc connection. The error is as follows,\n");
            		System.err.println(e.getMessage());
			throw(e);
		}
	}
	
	public void closeConnection() throws Exception{
		con.close();
	}
}
