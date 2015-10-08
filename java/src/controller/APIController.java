package controller;

import java.io.File;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import org.apache.http.HttpEntity;
import org.apache.http.client.methods.CloseableHttpResponse;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.CloseableHttpClient;
import org.apache.http.impl.client.HttpClients;
import org.apache.http.util.EntityUtils;

import entity.Video;

public class APIController {
	
	public List<Video> getListeVideo(){
		List<Video> videos = new ArrayList<Video>();
		videos.add(new Video(1,null,"test1","test2"));
		videos.add(new Video(1,null,"test1","test2"));
		
		return videos;
	}
	
	public boolean checkCredentials(String id, String password){
		return true;
	}
	
	public boolean addComment(int idvideo, int iduser, String comment){
		return true;
	}
	
	public File readVideo(int idvideo){
		return null;
	}
	
	private void sendRequest(String request) throws IOException{
		CloseableHttpClient httpclient = HttpClients.createDefault();
		HttpGet httpGet = new HttpGet("http://192.168.1.41");
		CloseableHttpResponse response1 = httpclient.execute(httpGet);

		try {
		    System.out.println(response1.getStatusLine());
		    HttpEntity entity1 = response1.getEntity();
		    // do something useful with the response body
		    // and ensure it is fully consumed
		    EntityUtils.consume(entity1);
		} finally {
		    response1.close();
		}
	}

}
