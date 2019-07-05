<?php
if(isset($_POST['submit']))
    $networktype = $_POST['networktype'];
    $choice = $_POST['choice'];
    echo $choice;
    echo "<br>";
    if($networktype == "TCP")
    {
        if($choice == "Timestamp")
        {
            $var = shell_exec("./tcptime.sh");
            echo $var;
            echo "<br>"."TCP_TIMESTAMP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Ip version")
        {
            $var = shell_exec("./tcpipv.sh");
            echo $var;
            echo "<br>"."TCP_IP_VERSIONS PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Ip")
        {
            $var = shell_exec("./tcpsrc.sh");
            echo $var;
            echo "<br>"."TCP_SOURCE_IP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Destination Ip")
        {
            $var = shell_exec("./tcpdst.sh");
            echo $var;
            echo "<br>"."TCP_DESTINATION_IP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Port")
        {
            $var = shell_exec("./tcpsport.sh");
            echo $var;
            echo "<br>"."TCP_SOURCE_PORT PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Mac Address")
        {
            $var = shell_exec("./tcpsmac.sh");
            echo $var;
            echo "<br>"."TCP_SOURCE_MAC_ADDRESS PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Destination Mac Address")
        {
            $var = shell_exec("./tcpdmac.sh");
            echo $var;
            echo "<br>"."TCP_DESTINATION_MAC_ADDRESS PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Length of Packet")
        {
            $var = shell_exec("./tcplpac.sh");
            echo $var;
            echo "<br>"."TCP_LENGTH_OF_PACKET PRINTED SUCCESSFULLY";
        }
    }
    elseif($networktype == "UDP")
    {
        if($choice == "Timestamp")
        {
            $var = shell_exec("./udptime.sh");
            echo $var;
            echo "<br>"."UDP_TIMESTAMP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Ip version")
        {
            $var = shell_exec("./udpipv.sh");
            echo $var;
            echo "<br>"."UDP_IP_VERSIONS PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Ip")
        {
            $var = shell_exec("./udpsrc.sh");
            echo $var;
            echo "<br>"."UDP_SOURCE_IP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Destination Ip")
        {
            $var = shell_exec("./udpdst.sh");
            echo $var;
            echo "<br>"."UDP_DESTINATION_IP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Port")
        {
            $var = shell_exec("./udpsport.sh");
            echo $var;
            echo "<br>"."UDP_SOURCE_PORT PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Mac Address")
        {
            $var = shell_exec("./udpsmac.sh");
            echo $var;
            echo "<br>"."UDP_SOURCE_MAC_ADDRESS PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Destination Mac Address")
        {
            $var = shell_exec("./udpdmac.sh");
            echo $var;
            echo "<br>"."UDP_DESTINATION_MAC_ADDRESS PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Length of Packet")
        {
            $var = shell_exec("./udplpac.sh");
            echo $var;
            echo "<br>"."UDP_LENGTH_OF_PACKET PRINTED SUCCESSFULLY";
        }
    }
    elseif($networktype == "ARP")
    {
        if($choice == "Timestamp")
        {
            $var = shell_exec("./arptime.sh");
            echo $var;
            echo "<br>"."ARP_TIMESTAMP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Ip version")
        {
            $var = shell_exec("./arpipv.sh");
            echo $var;
            echo "<br>"."ARP_IP_VERSION PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Ip")
        {
            $var = shell_exec("./arpsrc.sh");
            echo $var;
            echo "<br>"."ARP_SOURCE_IP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Destination Ip")
        {
            $var = shell_exec("./arpdst.sh");
            echo $var;
            echo "<br>"."ARP_DESTINATION_IP PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Port")
        {
            $var = shell_exec("./arpsport.sh");
            echo $var;
            echo "<br>"."ARP_SOURCE_PORT PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Source Mac Address")
        {
            $var = shell_exec("./arpsmac.sh");
            echo $var;
            echo "<br>"."ARP_SOURCE_MAC_ADDRESS PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Destination Mac Address")
        {
            $var = shell_exec("./arpdmac.sh");
            echo $var;
            echo "<br>"."ARP_DESTINATION_MAC_ADDRESS PRINTED SUCCESSFULLY";
        }
        elseif($choice == "Length of Packet")
        {
            $var = shell_exec("./arplpac.sh");
            echo $var;
            echo "<br>"."ARP_LENGTH_OF_PACKET PRINTED SUCCESSFULLY";
        }
    }
?>
