<?php
	require_once 'classDrec.php';
	$clN=$argv[1];
	$dFn="../data/".$clN.".txt";
	$f=fopen($dFn,"r");
	if($f==null)
	{
		echo $dFn." NOT FOUND\n";
		exit(-101);
	}
	$hrec=fgets($f);
	$arr=explode("\n",$hrec);
	$arr=explode("\t",$arr[0]);
	$clN=$arr[0];
	$ct=count($arr);
	$exten="";
	$extenFlag=false;
	if($ct ==2)
	{
		$exten=$arr[1];
		$extenFlag=true;
	}
	$varArr=array();
	$ct=0;
	while(($rec=fgets($f))!=null)
	{
		$allocObj=new classDrec($rec);
		$varArr[$ct]=$allocObj;
		$ct++;
	}
	print_r($varArr);
	$outFn="../output/".$clN.".php";
	$outF=fopen($outFn,"w");
	if($outF==null)
	{
		echo $outFn." NOT WRITABLE\n";
		exit(-101);
	}
	fprintf($outF,"<?php\n");
	fprintf($outF,"\n\n\n\n\n\n\n\n\n\n\n");
	fprintf($outF,"class %s",$clN);
	if($extenFlag)
	{
		fprintf($outF," extends %s",$exten);
	}
	fprintf($outF,"\n{\n");
	$ct=count($varArr);
	for($i=0;$i<$ct;$i++)
	{
		$vn=$varArr[$i]->getVarName();
		fprintf($outF,"\tprivate \$%s;\n",$vn);
	}
	fprintf($outF,"\tpublic function __construct(");
	$pre="";
	for($i=0;$i<$ct;$i++)
        {
                $isC=$varArr[$i]->isConstruct();
		if($isC == false) continue;
		$vnA=$varArr[$i]->getArgVarName();
                fprintf($outF,"%s%s",$pre,$vnA);
		$pre=",";
        }
	fprintf($outF,")\n");
	fprintf($outF,"\t{\n");
	$pre="";
	for($i=0;$i<$ct;$i++)
        {
                $isC=$varArr[$i]->isConstruct();
		if($isC == false) continue;
		$vnA=$varArr[$i]->getArgVarName();
		$vnU=$varArr[$i]->getUvarName();
		fprintf($outF,"\t\t\t\$this->set%s(%s);\n",$vnU,$vnA);
		
	}
	fprintf($outF,"\t}\n");


	fprintf($outF,"\tpublic function __destruct()\n");
	fprintf($outF,"\t{\n");
	fprintf($outF,"\t}\n");
		
	echo $ct."\n";
	for($i=0;$i<$ct;$i++)
	{
		$vn=$varArr[$i]->getVarName();
		$vnU=$varArr[$i]->getUvarName();
		fprintf($outF,"\tpublic function get%s() \n",$vnU);
		fprintf($outF,"\t{\n");
		fprintf($outF,"\t\treturn \$this->%s;\n",$vn);
		fprintf($outF,"\t}\n");
	}
	for($i=0;$i<$ct;$i++)
	{
		$vn=$varArr[$i]->getVarName();
		$vnU=$varArr[$i]->getUvarName();
		fprintf($outF,"\tpublic function set%s(\$data) \n",$vnU);
		fprintf($outF,"\t{\n");
		fprintf($outF,"\t\t\$this->%s=\$data;\n",$vn);
		fprintf($outF,"\t}\n");
	}
	fprintf($outF,"}\n");
	fprintf($outF,"?>\n");
	
	if(!fclose($outF))
	{
		echo "CLOSE FAILED\n";
		exit(-102);
	}
?>
