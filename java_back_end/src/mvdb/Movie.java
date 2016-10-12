package mvdb;
import java.sql.ResultSet;
import java.util.*;
import java.sql.SQLException;
import java.sql.Statement;

public class Movie {
    public Movie()
    {}

/*select movie according to different ways method*/
    public List<String> test(){
    	List<String> stockList = new ArrayList<String>();
    	stockList.add("stock1");
    	stockList.add("stock2");

    	String[] stockArr = new String[stockList.size()];
    	stockArr = stockList.toArray(stockArr);

    	for(String s : stockArr)
    	    System.out.println(s);
    	return stockList;
    }
    public List<String> getMovie(String type,String object,Statement stmt)
    {
      String sql="select * from Movies where "+type+" like '%"+object+"%'";
      List<String> output=new ArrayList<String>();
      ResultSet rs=null;
      //System.out.println("executing "+sql);
        try{
          rs=stmt.executeQuery(sql);
          while (rs.next())
         {
        	  output.add(Integer.toString(rs.getInt("mid")));
        	  output.add(rs.getString("name"));
        	  output.add(rs.getString("date"));
        	  output.add(rs.getString("director"));
        	  output.add(rs.getString("cast"));
        	  output.add(rs.getString("description"));
        	  output.add(rs.getString("picture"));
        	  output.add(rs.getString("rate"));
        	  output.add(Float.toString(rs.getFloat("point")));
        	  output.add(Integer.toString(rs.getInt("duration")));
        	  output.add(Integer.toString(rs.getInt("genre")));
         }
           
           rs.close();
        }
        catch(Exception e)
        {
          //System.out.println("cannot find required movie!");
        }
        finally
        {
          try{
            if (rs!=null && !rs.isClosed())
              rs.close();
          }
          catch(Exception e)
          {
            //System.out.println("cannot close resultset");
          }
        }
        return output;
    }
    
    public List<String> getMovie(int mid,Statement stmt)
    {
      String sql="select * from Movies where mid="+Integer.toString(mid);
      List<String> output=new ArrayList<String>();
      ResultSet rs=null;
      //System.out.println("executing "+sql);
        try{
          rs=stmt.executeQuery(sql);
          while (rs.next())
         {
        	  output.add(Integer.toString(rs.getInt("mid")));
        	  output.add(rs.getString("name"));
        	  output.add(rs.getString("date"));
        	  output.add(rs.getString("director"));
        	  output.add(rs.getString("cast"));
        	  output.add(rs.getString("description"));
        	  output.add(rs.getString("picture"));
        	  output.add(rs.getString("rate"));
        	  output.add(Float.toString(rs.getFloat("point")));
        	  output.add(Integer.toString(rs.getInt("duration")));
        	  output.add(Integer.toString(rs.getInt("genre")));
         }
           
           rs.close();
        }
        catch(Exception e)
        {
          //System.out.println("cannot find required movie!");
        }
        finally
        {
          try{
            if (rs!=null && !rs.isClosed())
              rs.close();
          }
          catch(Exception e)
          {
            //System.out.println("cannot close resultset");
          }
        }
        return output;
    }
    
/* insert method(only administrator)*/
    public void insertMovie(int mmid,String mname, String mrate, String mdate,String mposter,String mcast,String mdirector,String mdescription,int mpoint,String mduration,String mgenre,Statement stmt) throws SQLException
    {
      String sql="insert into Movies(mid,name,rate,date,picture,cast,director,description,point,duration,genre) values("+Integer.toString(mmid)+",'"+mname+"','"+mrate+"','"+mdate+"','"+mposter+"','"+mcast+"','"+mdirector+"','"+mdescription+"',"+Integer.toString(mpoint)+",'"+mduration+"','"+mgenre+"')";
  
      String output="";
        System.out.println("executing "+sql);
        try{
          stmt.executeUpdate(sql);
        }
          catch(Exception e)
        {
          System.out.println("cannot add the movie into database!Please check the information about the movie!");
        }
    }
    
/*delete method(only administrator)*/
    public void deleteMovie(int mmid,String mname,Statement stmt) throws SQLException
    {
      String sql="delete from Movies where name like '%"+mname+"%' and mid like "+mmid+"";
      String output="";
        System.out.println("executing "+sql);
          try{
        stmt.executeUpdate(sql);
          }
          catch(Exception e)
        {
          System.out.println("cannot delete the movie from database!Please check the information about the movie!");
        }
    }
    
/*update method(only administrator)*/
    public void updateMovie(int mmid, String type, String object, Statement stmt) throws SQLException
    {
      String sql="update Movies set "+type+" = '"+object+"' where mid = "+Integer.toString(mmid)+"";
      String output="";
        System.out.println("executing "+sql);
          try{
        stmt.executeUpdate(sql);
          }
          catch(Exception e)
        {
          System.out.println("cannot update the movie!Please check the information about the movie!");
        }
    }
}
