package mvdb;
import java.sql.Statement;
import java.util.*;

public class testdriver {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try{
			Connector con= new Connector();
			Movie movie= new Movie();
			Comments comment = new Comments();
			Users user = new Users();
			CommentVal commentval = new CommentVal();
			
			List<String> result=movie.getMovie("name","girl",con.stmt);
			System.out.println(result);
			//System.out.println(movie.test());
			/*movie.insertMovie(7,"Captain America1", "PG-15","01/01/2008","C","AN","CCC","Chen","bbbbb",con.stmt);
		    movie.deleteMovie("1","Captain America",con.stmt);
			movie.updateMovie(1,"name","Captain America",con.stmt);
			*/
			
			
			//;List<String> resultComment = comment.getComments("Captain America","01/01/2008", con.stmt);
			//System.out.println(resultComment);
			//comment.insertComments(1,"wo", "Captain America","01/01/2008","bbbbbbbb", 6.5f, "04/30/2009", con.stmt);
			//comment.deleteComments(1,con.stmt);
			//int result=comment.Maxcid(con.stmt);
			//System.out.println(result);
			
			
			//String resultComment = user.getUsers("admin","admini", con.stmt);
			//System.out.println(resultComment);
			//user.updateUsers(1, "email", "456@qq.com", con.stmt);
			//System.out.println(user.findEmail("smalltigerson@gmail.com",con.stmt));
			//user.deleteUsers(2, con.stmt);
			
			
			/*
			String resultComment = commentval.getCommentVal(1, con.stmt);
			System.out.println(resultComment);
			commentval.updateCommentVal(1,1,5.5f,con.stmt);
			commentval.insertCommentVal(1,1,6.5f,"12-30-2014",con.stmt);
			commentval.deleteCommentVal(1, 1, con.stmt);
			*/
			
			
			con.closeConnection();
		}
		catch (Exception e)
		{
			e.printStackTrace();
			
		}
	}

}
