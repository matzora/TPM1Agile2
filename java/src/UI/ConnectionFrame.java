package UI;

import java.awt.Color;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;

public class ConnectionFrame extends JFrame {

	private static final long serialVersionUID = -6574993599583275421L;
	private JLabel error = null;
	
	public ConnectionFrame() {
		
		this.setTitle("Connection screen");
		this.setLayout(null);
		
		JLabel loginLabel = new JLabel("login");
		loginLabel.setBounds(70, 30, 100, 20);
		JTextField login = new JTextField(30);
		login.setBounds(150, 30, 100, 20);
		
		JLabel passLabel = new JLabel("password");
		passLabel.setBounds(70, 70, 100, 20);
		JPasswordField pass = new JPasswordField(20);
		pass.setBounds(150, 70, 100, 20);
		
		JCheckBox save = new JCheckBox();
		save.setBounds(70, 100, 150, 40);
		save.setText("Save credentials");
		save.addActionListener(new ActionListener(){

			@Override
			public void actionPerformed(ActionEvent e) {
				if (save.isSelected()) {
					System.out.println("save credentials");
				}
			}
		});
		
		error = new JLabel();
		error.setVisible(false);
		this.add(error);
		
		JButton connection = new JButton("Connection");
		connection.setBounds(100, 150, 100, 20);
		connection.addActionListener(new ActionListener(){

			@Override
			public void actionPerformed(ActionEvent e) {
				System.out.println("connection");
				
				error.setBounds(10, 125, 300, 20);
				
				if (login.getText().equals("")) {
					error.setText("Please insert your login");
					error.setForeground(Color.RED);
					error.setVisible(true);
				}
				
				if (pass.getText().equals("")) {
					error.setText("Please insert your password");
					error.setForeground(Color.RED);
					error.setVisible(true);
				}
				
				if (login.getText().equals("") && pass.getText().equals("")) {
					error.setText("Please insert your login and your password");
					error.setForeground(Color.RED);
					error.setVisible(true);
				}
				
				if (!login.getText().equals("") && !pass.getText().equals("")) {
					// check credentials code
					System.out.println("Connection !");
				}
			}	
		});
		
		this.add(loginLabel);
		this.add(login);
		this.add(passLabel);
		this.add(pass);
		this.add(save);
		this.add(connection);
	
		this.setSize(300, 200);
		this.setVisible(true);		
	}
}
