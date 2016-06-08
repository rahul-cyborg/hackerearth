temp = gets.chomp.strip.split(' ').map(&:to_i)

n = temp[0]
x = temp[1]

arr = gets.chomp.strip.split(' ').map(&:to_i)

temp =  2.upto(n).flat_map { |n| arr.combination(n).to_a }

count = 0

temp.each do |temp_arr|
  val = temp_arr[0]
  (1...temp_arr.length).each do |i|
    val = val ^ temp_arr[i]
  end
  k = val % 1000000007
  count += 1 if k == x
end 

puts count
