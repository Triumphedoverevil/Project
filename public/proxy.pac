function FindProxyForURL(url, host)

{

   if (isInNet(host, “10.10.10.0”, “255.255.255.0”)) {

      return “DIRECT”;

   } else {

      if (shExpMatch(url, “http:*”))

         return “PROXY 10.10.10.101:3128″ ;

      if (shExpMatch(url, “https:*”))

         return “PROXY 10.10.10.101:3128″ ;

      if (shExpMatch(url, “ftp:*”))

         return “PROXY 10.10.10.101:3128″ ;

      return “DIRECT”;

   }

}

#EOF


