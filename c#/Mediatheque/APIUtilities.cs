using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;

namespace Mediatheque
{
	public static class APIUtilities
	{
		public static bool LoginOk;

		/// <summary>
		/// This is for request the distant API to know if the credentials are matching
		/// </summary>
		/// <param name="Uri">The Uri to request</param>
		public async static void RequestLogin (string Uri)
		{
			HttpClient requestCredentials = new HttpClient();
			HttpResponseMessage response = await requestCredentials.GetAsync(Uri);
			HttpContent content = response.Content;
			if (response.IsSuccessStatusCode)
			{
				LoginOk = true;
			}
			else
			{
				LoginOk = false;
			}
		}
	}
}
