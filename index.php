function get_hotel($id)
 {
     $pdo = get_connection();
-    // $query = 'SELECT * FROM hotel WHERE id = '.$id;
-    // var_dump($query);die;
-    // $result = $pdo->query($query);
+    $query = 'SELECT * FROM hotel WHERE id = :idVal';
+    $stmt = $pdo->prepare($query);
+    $stmt->bindParam('idVal', $id);
+    $stmt->execute();
 
-    // return $result->fetch();
+    return $stmt->fetch();
 }
