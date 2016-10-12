package mvdb;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class Comments {
	public Comments()
	{}
	/*select method*/
	public List<String> getComments(String mname, String mdate,Statement stmt)
	{
		String sql="select * from Comments where name = '"+mname+"' and date = '"+mdate+"'" ;
		List<String> output=new ArrayList<String>();
		ResultSet rs=null;
		System.out.println("executing "+sql);
		try{
			rs=stmt.executeQuery(sql);
			while (rs.next()){
				output.add(Integer.toString(rs.getInt("cid")));
				output.add(rs.getString("uid"));
				output.add(rs.getString("comments"));
				output.add(Float.toString(rs.getFloat("points")));
				output.add(rs.getString("cdate"));
				output.add(Float.toString(rs.getFloat("cpoints")));
				}
			rs.close();
			}
		 	catch(Exception e)
		 	{
		 		System.out.println("cannot find the required movie!");
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
	public int Maxcid(Statement stmt){
		int res=0;
		String sql="select max(cid) as mcid from Comments";
		ResultSet rs=null;
		try{
			rs=stmt.executeQuery(sql);
			while (rs.next()){
				res=rs.getInt("mcid");
				}
			rs.close();
			}
		 	catch(Exception e)
		 	{
		 		System.out.println("cannot find the max!");
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
		return res;
	}
	public void insertComments(int mcid, String muid, String mname, String mdate,String mcomments, float mpoints, String mcdate, Statement stmt) throws SQLException
	{
		String sql="insert into Comments(cid,uid,name,date,comments,points,cdate,cpoints) values("+Integer.toString(mcid)+",'"+muid+"','"+mname+"','"+mdate+"','"+mcomments+"',"+Float.toString(mpoints)+",'"+mcdate+"',0)";
		String output="";
		 	System.out.println("executing "+sql);
		 	try{
		    stmt.executeUpdate(sql);
		 	}
		    catch(Exception e)
		 	{
		 		System.out.println("cannot add the comment");
		 	}
	}
	
	/*delete method*/
	public void deleteComments(int mcid,Statement stmt) throws SQLException
	{
		String sql="delete from Comments where cid = "+Integer.toString(mcid)+"";
		String output="";
		 	System.out.println("executing "+sql);
		    try{
		 	stmt.executeUpdate(sql);
		    }
		    catch(Exception e)
		 	{
		 		System.out.println("cannot delete the comment");
		 	}
	}	
}
