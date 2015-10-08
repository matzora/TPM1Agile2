package test;

import controller.APIController;

public class test {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		APIController api = new APIController();
		api.sendRequest("http://jsonplaceholder.typicode.com/posts/1");
	}

}
