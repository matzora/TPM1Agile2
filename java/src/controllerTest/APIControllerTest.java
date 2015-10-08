package controllerTest;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.fail;

import java.util.ArrayList;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import controller.APIController;
import entity.Video;

public class APIControllerTest {
	private APIController api;

	@Before
	public void setUp() throws Exception {
		api = new APIController();
	}

	@After
	public void tearDown() throws Exception {
		
	}

	@Test
	public void testGetListeVideo() {
		assertEquals(new ArrayList<Video>(),api.getListeVideo());
	}

	@Test
	public void testCheckCredentials() {
		assertEquals(false,api.checkCredentials(null, null));
	}

	@Test
	public void testAddComment() {
		assertEquals(false,api.addComment(0, 0, ""));
	}

	@Test
	public void testReadVideo() {
		assertEquals(null,api.readVideo(0));
	}

	@Test
	public void testSendRequest() {
		assertEquals(true,api.sendRequest("http://jsonplaceholder.typicode.com/posts/1"));
	}
	
}
