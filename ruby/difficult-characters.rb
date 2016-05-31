n = gets.chomp.strip.to_i

data = []

n.to_i.times do
  data << gets.chomp.strip
end

output =[]

data.each do |value|
  str_hash =Hash.new(0)
  value.each_char do |char|
    str_hash[char] += 1
  end
  temp = []
  str_hash.each do |key, value|
    temp << [value,key]
  end
  hash = Hash.new { |hash, key| hash[key] = [] }
  temp.each { |x,y| hash[x] << y }
  hash = hash.invert
  hash = hash.sort {|a,b| a[1]<=>b[1]}
  res =[]
  hash.each do |inn_arr|
    temp_arr = inn_arr[0].sort { |x,y| y <=> x } 
    res += temp_arr
  end
  result = ("a".."z").to_a.reverse! - res
  result += res
  output << result.join(' ')
end
puts output




