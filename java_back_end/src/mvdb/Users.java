package mvdb;
import java.sql.ResultSet;
import java.util.*;
import java.sql.SQLException;
import java.sql.Statement;

public class Users {
	public Users()
	{}
	/*select method*/
	public String getUsers(String muid,String pass, Statement stmt)
	{
		String sql="select * from Users where uid = '"+muid+"' and passwd='"+pass+"'" ;
		String output="";
		//Hashtable<String, String> res;
		ResultSet rs=null;
		 	System.out.println("executing "+sql);
		 	try{
   		 	rs=stmt.executeQuery(sql);
   		 	while (rs.next())
			 {
				//System.out.print("cname:")
			        output+="UserID:"+rs.getString("uid")+"\n"+"Email:"+rs.getString("email")+"\n"+"CreatingDate:"+rs.getString("createdate")+"\n"; 
			 }
		     
		     rs.close();
		 	}
		 	catch(Exception e)
		 	{
		 		System.out.println("cannot find the required user!");
		 	}
		 	finally
		 	{
		 		try{
   		 		if (rs!=null && !rs.isClosed())
   		 			rs.close();
		 		}
		 		catch(Exception e)
		 		{
		 			System.out.println("cannot close resultset");
		 		}
		 	}
	    return output;
	}
	/*match users*/
	public String findUsers(String muid, Statement stmt)
	{
		String sql="select * from Users where uid = '"+muid+"'";
		String output="";
		//Hashtable<String, String> res;
		ResultSet rs=null;
		 	System.out.println("executing "+sql);
		 	try{
   		 	rs=stmt.executeQuery(sql);
   		 	while (rs.next())
			 {
				//System.out.print("cname:")
			        output+="UserID:"+rs.getString("uid")+"\n"+"Email:"+rs.getString("email")+"\n"+"CreatingDate:"+rs.getString("createdate")+"\n"; 
			 }
		     
		     rs.close();
		 	}
		 	catch(Exception e)
		 	{
		 		System.out.println("cannot find the required user!");
		 	}
		 	finally
		 	{
		 		try{
   		 		if (rs!=null && !rs.isClosed())
   		 			rs.close();
		 		}
		 		catch(Exception e)
		 		{
		 			System.out.println("cannot close resultset");
		 		}
		 	}
	    return output;
	}
	
	public String findEmail(String email, Statement stmt)
	{
		String sql="select * from Users where email = '"+email+"'";
		String output="";
		//Hashtable<String, String> res;
		ResultSet rs=null;
		 	System.out.println("executing "+sql);
		 	try{
   		 	rs=stmt.executeQuery(sql);
   		 	while (rs.next())
			 {
				//System.out.print("cname:")
			        output+="UserID:"+rs.getString("uid")+"\n"+"Email:"+rs.getString("email")+"\n"+"CreatingDate:"+rs.getString("createdate")+"\n"; 
			 }
		     
		     rs.close();
		 	}
		 	catch(Exception e)
		 	{
		 		System.out.println("cannot find the required user!");
		 	}
		 	finally
		 	{
		 		try{
   		 		if (rs!=null && !rs.isClosed())
   		 			rs.close();
		 		}
		 		catch(Exception e)
		 		{
		 			System.out.println("cannot close resultset");
		 		}
		 	}
	    return output;
	}
	
	/*insert method*/
	public String insertUsers(String muid, String memail,String mcreatedate, String passwd,Statement stmt) throws SQLException
	{
		String sql="insert into Users(uid,email,createdate,passwd) values('"+muid+"','"+memail+"','"+mcreatedate+"','"+passwd+"')";
		String output="true";
		 	System.out.println("executing "+sql);
		 	try{
		    stmt.executeUpdate(sql);
		 	}
		    catch(Exception e)
		 	{
		 		System.out.println("cannot add the comment");
		 		output="false";
		 	}
		 	return output;
	}
	
	
	/*delete method*/
	public void deleteUsers(String muid,Statement stmt) throws SQLException
	{
		String sql="delete from Users where uid = '"+muid+"'";
		String output="";
		 	System.out.println("executing "+sql);
		    try{
		 	stmt.executeUpdate(sql);
		    }
		    catch(Exception e)
		 	{
		 		System.out.println("cannot delete the user");
		 	}
	}	
	
	/*update method*/
	public void updateUsers(String muid, String type, String object, Statement stmt) throws SQLException
	{
		String sql="update Users set "+type+" = '"+object+"' where uid = '"+muid+"'";
		String output="";
		 	System.out.println("executing "+sql);
		    try{
		 	stmt.executeUpdate(sql);
		    }
		    catch(Exception e)
		 	{
		 		System.out.println("cannot update the user!Please check the information about the user!");
		 	}
	}	
}