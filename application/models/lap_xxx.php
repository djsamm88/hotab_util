SELECT 
	CASE WHEN Device_ID='KCP_A'   THEN Energy END AS 'KCP_A'   ,
    CASE WHEN Device_ID='KCP_B'   THEN Energy END AS 'KCP_B'   ,
    
    
	SELECT Device_ID,Date_TIme,Energy FROM `rec_raw`