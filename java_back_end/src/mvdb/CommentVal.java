package mvdb;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class CommentVal {
	public CommentVal()
	{}
	/*select method*/
	public String getCommentVal(int mcid,Statement stmt)
	{
		String sql="select * from CommentVal where cid = "+Integer.toString(mcid)+"" ;
		String output="";
		ResultSet rs=null;
		 	System.out.println("executing "+sql);
		 	try{
   		 	rs=stmt.executeQuery(sql);
   		 	while (rs.next())
			 {
				//System.out.print("cname:");
			        output+="CommentID:"+rs.getInt("cid")+"\n"+"UserID:"+rs.getString("uid")+"\n"+"Points to Comment:"+rs.getString("repoints")+"\n"+"Comment Date:"+rs.getString("recdate")+"\n"+"Re-Comment:"+rs.getString("recomments")+"\n"; 
			 }
		     
		     rs.close();
		 	}
		 	catch(Exception e)
		 	{
		 		System.out.println("cannot find the required comment!");
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
	public void insertCommentVal(String muid,int mcid,String mrepoints,String mrecdate,String mrecomments,Statement stmt) throws SQLException
	{
		String sql="insert into CommentVal(uid,cid,repoints,recdate,recomments) value('"+muid+"',"+Integer.toString(mcid)+",'"+mrepoints+"','"+mrecdate+"','"+mrecomments+"')";
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
	public void deleteCommentVal(String muid,int mcid,Statement stmt) throws SQLException
	{
		String sql="delete from CommentVal where uid = '"+muid+"' and cid = "+Integer.toString(mcid)+"";
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
	
	/*update method*/
	public void updateCommentVal(String muid, int mcid,String mrepoints,Statement stmt) throws SQLException
	{
		String sql="update CommentVal set repoints = '"+mrepoints+"' where uid = '"+muid+"' and cid = "+Integer.toString(mcid)+"";
		String output="";
		 	System.out.println("executing "+sql);
		    try{
		 	stmt.executeUpdate(sql);
		    }
		    catch(Exception e)
		 	{
		 		System.out.println("cannot update the comment!Please check the information about the comment!");
		 	}
	}
}