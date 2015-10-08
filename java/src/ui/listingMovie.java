/**
 * 
 */
package ui;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Container;
import java.awt.Dimension;
import java.awt.FlowLayout;

import javax.swing.Box;
import javax.swing.BoxLayout;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JList;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTextField;

/**
 * @author rvano_000
 *
 */
public class listingMovie extends JFrame {

	private JList list;
	private JScrollPane scroll;
	private JPanel panList;
	private JPanel panRight;
	private JPanel panMovie;
	private JPanel panDesc;
	private JPanel panTchat;


	public listingMovie(){

		//WINDOW
		this.setTitle("Listing Movie");
		this.setSize(1024, 768);
		this.setLocationRelativeTo(null);
		this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);             

		//LIST MOVIE
		panList = new JPanel();
		scroll = new JScrollPane(list);
		scroll.setVerticalScrollBarPolicy(JScrollPane.VERTICAL_SCROLLBAR_ALWAYS);
		String[] data = {"51321", "654534", "65465", "54441"};
		list = new JList<String>(data);
		list.setBounds(30, 30, 250, 600);
		list.setFixedCellWidth(250);


		this.add(list, BorderLayout.LINE_START);
		

		//Panel Movie
		panRight = new JPanel();
		panRight.setSize(300, 300);
		this.add(panRight, BorderLayout.CENTER);
		panRight.setLayout(new BoxLayout(panRight, BoxLayout.PAGE_AXIS));
		
		initPanMovie();
		
		String DescriptionFromBdd = "text for desc";
		
		initPanDesc(DescriptionFromBdd);
		initPanTchat();

		this.setVisible(true);    
	}

	public void initPanMovie() {
		panMovie = new JPanel();
		panMovie.setBackground(Color.blue);
		panRight.add(panMovie);
	}

	public void initPanDesc(String _desc) {
		panDesc = new JPanel();
		panDesc.setBackground(Color.green);
		panDesc.setLayout(new FlowLayout());	
		
		JPanel line1 = new JPanel();
		line1.setLayout(new BoxLayout(line1,BoxLayout.LINE_AXIS));		
		panDesc.add(line1);
		
		JLabel title = new JLabel("label:");		
		JTextField content = new JTextField(_desc);
		content.setEditable(false);
		
		
		line1.add(title);
		line1.add(Box.createRigidArea(new Dimension(10,0)));
		line1.add(content);
		
		panRight.add(panDesc);
	}

	public void initPanTchat() {
		panTchat = new JPanel();
		panTchat.setBackground(Color.yellow);
		panRight.add(panTchat);
	}
}
