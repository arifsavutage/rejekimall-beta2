SELECT 
	member.id_member, member.nama,
	`order`.idpesan, `order`.waktu, `order`.`totalbayar`, 
	`order`.`totalbayar`, `order`.`ongkoskirim`, `order`.`to`, 
	`order`.`alamat`, `order`.`kdpos`, `order`.`kontak`, 
	`order`.`tglkonfirm`, `order`.`bank`, `order`.`bukti`, `order`.`status`,
	order_detail.gid, order_detail.jml, order_detail.subtotal, order_detail.oid,
	detail_kategori.nama, seller.id_seller, seller.nama, seller.nama_toko, 
	kategori.nama, brand.idbrand, brand.nmbrand, brand.gb_brand
FROM member, `order`, order_detail, detail_kategori, kategori, brand, seller
WHERE
	member.id_member = `order`.id_member
	AND
	order_detail.idpesan = `order`.idpesan
	AND
	order_detail.gid = detail_kategori.gid
	AND
	kategori.cid = detail_kategori.cid
	AND
	seller.id_seller = kategori.id_seller
	AND
	brand.idbrand = detail_kategori.idbrand
	AND
	seller.id_seller = 1
	AND
	`order`.status = 0
	GROUP BY `order`.idpesan
