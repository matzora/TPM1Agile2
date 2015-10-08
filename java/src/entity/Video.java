package entity;

import java.awt.Image;

public class Video {
	private int Id;
	private Image preview;
	private String description;
	private String title;
	
	public Video(int Id, Image preview, String description, String title){
		this.Id=Id;
		this.preview=preview;
		this.description=description;
		this.title=title;
	}
	
	public int getId() {
		return Id;
	}
	public void setId(int id) {
		Id = id;
	}
	public Image getPreview() {
		return preview;
	}
	public void setPreview(Image preview) {
		this.preview = preview;
	}
	public String getDescription() {
		return description;
	}
	public void setDescription(String description) {
		this.description = description;
	}
	public String getTitle() {
		return title;
	}
	public void setTitle(String title) {
		this.title = title;
	}
}
