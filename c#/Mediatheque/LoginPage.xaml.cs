using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace Mediatheque
{
	/// <summary>
	/// Logique d'interaction pour MainWindow.xaml
	/// </summary>
	public partial class MainWindow : Window
	{
		public MainWindow()
		{
			InitializeComponent();
		}

		private void BtnLogin_Click(object sender, RoutedEventArgs e)
		{
			string login = TextBoxLogin.Text;
			string password = PasswordBoxLogin.Password;

			APIUtilities.RequestLogin("http://192.168.1.41/api/login");
			if(APIUtilities.LoginOk)
			{
				// Display the new view
			}
			else
			{
				// Display an error on this page
			}
		}
	}
}
